<?php

/**
 * @apiGroup           User
 * @apiName            registerUser
 * @api                {post} /v1/register Register User (create client)
 * @apiDescription     Register user as (client).
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  email (required) required|email|max:40|unique:users
 * @apiParam           {String}  password (required) required|min:6|max:30
 * @apiParam           {String}  first_name (required) required|min:2|max:50
 * @apiParam           {String}  last_name (required) required|min:2|max:50
 * @apiParam           {String}  gender (optional)
 * @apiParam           {String}  birth (optional)
 *
 * @apiUse             UserSuccessSingleResponse
 */

$router->post('/register', [
    'as' => 'api_user_register_user',
    'uses'  => 'Controller@registerUser',
]);
