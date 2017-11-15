<?php

namespace App\Containers\Authorization\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Authorization\Tasks\CreateRoleTask;
use App\Ship\Parents\Seeders\Seeder;
use Illuminate\Support\Facades\App;

/**
 * Class AuthorizationRolesSeeder_2
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class AuthorizationRolesSeeder_2 extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default Roles ----------------------------------------------------------------
        Apiato::call('Authorization@CreateRoleTask', ['admin', 'Administrator'])->givePermissionTo([
                'manage-roles',
                'create-admins',
                'manage-admins-access',
                'access-dashboard'
            ]
        );

        // ...

        // give the user required permissions, while seeding
        Apiato::call('Authorization@CreateRoleTask', ['user', 'User'])->givePermissionTo([
                'manage-ngo',
                'manage-event'
            ]
        );
    }
}
