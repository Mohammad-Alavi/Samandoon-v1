<?php

namespace App\Containers\User\Tasks;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\User\Data\Repositories\UserRepository;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\InternalErrorException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use App\Ship\Transporters\DataTransporter;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
     * @param $userId
     * @return User|mixed
     * @internal param $userData
     */
    public function run($data, $userId): User
    {
        if (empty($data)) {
            throw new UpdateResourceFailedException('Inputs are empty.');
        }

        if (array_key_exists('avatar', $data)) {
            $user = Apiato::call('User@FindUserByIdTask', [$userId]);
            $user->clearMediaCollection('avatar');
            $user->addMediaFromRequest('avatar')->toMediaCollection('avatar');
        }

        try {
            return $this->repository->update($data, $userId);
        } catch (ModelNotFoundException $exception) {
            throw new NotFoundException('User Not Found.');
        } catch (Exception $exception) {
            throw new InternalErrorException();
        }
    }
}
