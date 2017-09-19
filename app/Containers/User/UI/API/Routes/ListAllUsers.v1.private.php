<?php

/**
 * @apiGroup           User
 * @apiName            ListAllUsers
 * @api                {get} /v1/user List All Users
 * @apiDescription     List all Application Users (clients and admins). For all registered users "Clients" only you
 *                     can use `/clients`. And for all "Admins" only you can use `/admins`.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiUse             GeneralSuccessMultipleResponse
 */

$router->get('user', [
    'as' => 'API_User_listAllUsers',
    'uses'       => 'Controller@listAllUsers',
    'middleware' => [
        'auth:api',
    ],
]);
