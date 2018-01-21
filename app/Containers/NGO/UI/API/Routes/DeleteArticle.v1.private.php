<?php

/**
 * @apiGroup           NGO
 * @apiName            deleteArticle
 *
 * @api                {DELETE} /v1/ngo/article/{id} Delete Article
 * @apiDescription     Delete an Article
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User / Owner
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 204 No Content
{

}
 */

/** @var Route $router */
$router->delete('ngo/article/{id}', [
    'as' => 'api_ngo_delete_article',
    'uses'  => 'Controller@deleteArticle',
    'middleware' => [
      'auth:api',
    ],
]);
