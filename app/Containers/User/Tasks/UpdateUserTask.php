<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Data\Repositories\UserRepository;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\InternalErrorException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Transporters\DataTransporter;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

/**
 * Class UpdateUserTask.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UpdateUserTask extends Task
{

    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param DataTransporter $data
     * @param $id
     * @return User|mixed
     * @internal param $userData
     */
    public function run($data, $id): User
    {
        if (empty($data)) {
            throw new UpdateResourceFailedException('Inputs are empty');
        }

        try {
            DB::beginTransaction();
            $user = $this->repository->update($data, $id);
            if (array_key_exists('avatar', $data)) {
                $user->clearMediaCollection('avatar');
                $user->addMediaFromRequest('avatar')->toMediaCollection('avatar');
            }

        } catch (ModelNotFoundException $exception) {
            DB::rollBack();
            throw new NotFoundException('User Not Found');
        } catch (Exception $exception) {
            DB::rollBack();
            throw new InternalErrorException();
        } finally {
            DB::commit();
        }

        return $user;
    }
}
