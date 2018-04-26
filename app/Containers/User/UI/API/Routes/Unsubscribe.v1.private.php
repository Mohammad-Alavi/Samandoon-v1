<?php

/**
 * @apiGroup           User
 * @apiName            unsubscribe
 *
 * @api                {POST} /v1/user/unsubscribe/{id} Unsubscribe
 * @apiDescription     Unsubscribe from the given id
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "Unsubscribe successful"
}
 */

/** @var Route $router */
$router->post('user/unsubscribe/{id}', [
    'as' => 'api_user_unsubscribe',
    'uses'  => 'Controller@unsubscribe',
    'middleware' => [
      'auth:api',
    ],
]);
