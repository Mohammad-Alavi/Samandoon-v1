<?php

/**
 * @apiGroup           Article
 * @apiName            updateComment
 *
 * @api                {PUT} /v1/ngo/article/{id}/comment/{comment_id} Update Comment
 * @apiDescription     Update the specified comment
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated -> Owner/Admin
 *
 * @apiParam           {Text} body Comment body
 *
 * @apiUse             CommentSuccessSingleResponse
 *
 */

/** @var Route $router */
$router->put('ngo/article/{id}/comment/{comment_id}', [
    'as' => 'api_article_update_comment',
    'uses'  => 'Controller@updateComment',
    'middleware' => [
      'auth:api',
    ],
]);
