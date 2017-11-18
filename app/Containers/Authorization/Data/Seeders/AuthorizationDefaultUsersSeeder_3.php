<?php

namespace App\Containers\Authorization\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;
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
//        $client = new \GuzzleHttp\Client();
//        $request = $client->createRequest('GET', 'api.apiato.dev/register', [
//            'email' => ['admin@admin.com'],
//            'password' => ['admin'],
//            'first_name' => ['Super'],
//            'last_name' => ['Admin'],
//
//        ]);
//        $response = $client->post('https://connect.stripe.com/oauth/deauthorize', [
//            'Content-Type' => ['application/x-www-form-urlencoded'],
//            'Accept' => ['application/json'],
//
//        ]);
//
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
