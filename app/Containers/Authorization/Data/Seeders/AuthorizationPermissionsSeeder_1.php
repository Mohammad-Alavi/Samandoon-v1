<?php

namespace App\Containers\Authorization\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Authorization\Tasks\CreatePermissionTask;
use App\Ship\Parents\Seeders\Seeder;
use Illuminate\Support\Facades\App;

/**
 * Class AuthorizationPermissionsSeeder_1
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class AuthorizationPermissionsSeeder_1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Super Admin Permissions ----------------------------------------------------------
        Apiato::call('Authorization@CreatePermissionTask', ['manage-roles', 'Create, Update, Delete, Get All, Attach/detach permissions to Roles and Get All Permissions.']);
        Apiato::call('Authorization@CreatePermissionTask', ['create-admins', 'Create new Users (Admins) from the dashboard.']);
        Apiato::call('Authorization@CreatePermissionTask', ['manage-admins-access', 'Assign users to Roles.']);
        Apiato::call('Authorization@CreatePermissionTask', ['access-dashboard', 'Access the admins dashboard.']);

        // ...

        // Default User Permissions
        App::make(CreatePermissionTask::class)->run('manage-ngo', 'Create, Update, Delete, List NGOs', 'Manage NGO');
        App::make(CreatePermissionTask::class)->run('manage-event', 'Create, Update, Delete, List Events', 'Manage Event');
    }
}
