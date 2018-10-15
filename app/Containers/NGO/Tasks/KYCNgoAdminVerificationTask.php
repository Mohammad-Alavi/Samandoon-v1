<?php

namespace App\Containers\NGO\Tasks;

use App\Containers\FCM\Models\UserFCMToken;
use App\Containers\NGO\Data\Repositories\NGORepository;
use App\Containers\NGO\Models\Ngo;
use App\Containers\NGO\Notifications\NgoAdminVerificationNotification;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\DB;
use LaravelFCM\Facades\FCM;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;

class KYCNgoAdminVerificationTask extends Task
{
    private $repository;

    public function __construct(NGORepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(Ngo $ngo, $judgment, $processing_admin)
    {
        try {
            DB::beginTransaction();

            $ngoUpdated = $this->repository->update([
                'verification_status' => $judgment,
                'verification_admin_id' => $processing_admin->id
            ], $ngo->id);
        } catch (Exception $exception) {
            DB::rollBack();
            throw new CreateResourceFailedException($exception->getMessage());
        } finally {
            DB::commit();

            if ($ngoUpdated->verification_status == 'verified') {
                // send notification
                $ngo->user->notifyNow(new NgoAdminVerificationNotification(['ngo' => $ngo]), ['database']);

                $optionBuilder = new OptionsBuilder();
                $optionBuilder->setTimeToLive(60 * 20);

                $notificationBuilder = new PayloadNotificationBuilder('سمندون');
                $notificationBuilder->setBody('[' . $ngo->user->first_name . ']' . ' سمن شما تایید شد ')
                    ->setSound('default');

                $dataBuilder = new PayloadDataBuilder();
                $dataBuilder->addData(['a_data' => 'my_data']);

                $option = $optionBuilder->build();
                $notification = $notificationBuilder->build();
                $data = $dataBuilder->build();

                $tokens = UserFCMToken::where('user_id', $ngo->user->id)->pluck('android_fcm_token')->toArray();
                if (!empty($tokens)) {

                    $downstreamResponse = FCM::sendTo($tokens, $option, $notification, $data);

                    $downstreamResponse->numberSuccess();
                    $downstreamResponse->numberFailure();
                    $downstreamResponse->numberModification();

                    //return Array - you must remove all this tokens in your database
                    $downstreamResponse->tokensToDelete();

                    //return Array (key : oldToken, value : new token - you must change the token in your database )
                    $downstreamResponse->tokensToModify();

                    //return Array - you should try to resend the message to the tokens in the array
                    $downstreamResponse->tokensToRetry();

                    // return Array (key:token, value:errror) - in production you should remove from your database the tokens
                }
            }
        }
        return $ngoUpdated;
    }
}
