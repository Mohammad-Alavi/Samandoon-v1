<?php

namespace App\Containers\Authorization\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\User\Data\Repositories\UserRepository;
use App\Ship\Parents\Seeders\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

/**
 * Class AuthorizationDefaultUsersSeeder_3
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class AuthorizationDefaultUsersSeeder_3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = App::make(UserRepository::class)->create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'first_name' => 'Super',
            'last_name' => 'Admin',
        ]);

        $admin->assignRole(Apiato::call('Authorization@FindRoleTask', ['admin']));
//        // Default Users (with their roles) ---------------------------------------------
//        Apiato::call('User@CreateUserByCredentialsTask', [
//            $isClient = false,
//            'admin@admin.com',
//            'admin',
//            'Super',
//            'Admin',
//        ])->assignRole(Apiato::call('Authorization@FindRoleTask', ['admin']));

        // ...

    }
}
