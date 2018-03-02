<?php

/**
 * @apiGroup           Article
 * @apiName            getAllComments
 *
 * @api                {GET} /v1/ngo/article/{id}/comment Get All Comments
 * @apiDescription     Get all comments of the specified article
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             CommentSuccessSingleResponse
 *
 */

/** @var Route $router */
$router->get('ngo/article/{id}/comment', [
    'as' => 'api_article_get_all_comments',
    'uses'  => 'Controller@getAllComments',
//    'middleware' => [
//      'auth:api',
//    ],
]);
