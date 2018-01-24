<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Models\User;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use App\Containers\User\Data\Repositories\UserRepository;
use Exception;
use Illuminate\Support\Facades\App;
/**
 * Class FindUserByEmailTask
 *
 * @author  Sebastian Weckend
 */
class FindUserByEmailTask extends Task
{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        return $this->repository = $repository;
    }

    public function run(string $email): User
    {
        $user = $this->repository->findByField('email', $email)->first();
        throw_unless($user, new NotFoundException('User not found'));
        return $user;
    }
}
