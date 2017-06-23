<?php

namespace App\Containers\User\Tests\Unit;

use App\Containers\User\Actions\RegisterUserAction;
use App\Containers\User\Models\User;
use App\Containers\User\Tests\TestCase;
use App\Containers\User\UI\API\Requests\RegisterUserRequest;
use Illuminate\Support\Facades\App;

/**
 * Class CreateUserTest.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class RegisterUserTest extends TestCase
{

    public function testCreateUser_()
    {
        $data = [
            'email'    => 'Mohammad@test.test',
            'first_name'     => 'Mohammad',
            'last_name'     => 'Alavi',
            'password' => 'so-secret',
        ];

        // create request object and inject this data in it
        $request = RegisterUserRequest::injectData($data);

        $action = App::make(RegisterUserAction::class);
        $user = $action->run($request);

        // asset the returned object is an instance of the User
        $this->assertInstanceOf(User::class, $user);

        $this->assertEquals($user->first_name, $data['first_name']);
        $this->assertEquals($user->last_name, $data['last_name']);
    }
}
