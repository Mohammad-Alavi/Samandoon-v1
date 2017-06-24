<?php

/**
 * @apiGroup           Users
 * @apiName            registerUser
 * @api                {post} /v1/register Register User (create client)
 * @apiDescription     Register users as (client).
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  email (required) required|email|max:40|unique:users
 * @apiParam           {String}  password (required) required|min:6|max:30
 * @apiParam           {String}  name (required) required|min:2|max:50
 * @apiParam           {String}  gender (optional)
 * @apiParam           {String}  birth (optional)
 * @apiParam           {String}  device (optional)
 * @apiParam           {String}  platform (optional)
 *
 * @apiUse             UserSuccessSingleResponse
 */

$router->post('/register', [
    'uses'  => 'Controller@registerUser',
]);
