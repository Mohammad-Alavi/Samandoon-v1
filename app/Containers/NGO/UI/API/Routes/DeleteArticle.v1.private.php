<?php

/**
 * @apiGroup           NGO
 * @apiName            deleteArticle
 *
 * @api                {DELETE} /v1/ngo/article/{id} Delete Article
 * @apiDescription     Delete an Article
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "message": "Article (oj64bp5zjl8ywzn0) Deleted Successfully."
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
