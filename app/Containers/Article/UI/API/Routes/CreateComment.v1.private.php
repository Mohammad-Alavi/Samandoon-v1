<?php

/**
 * @apiGroup           Article
 * @apiName            createComment
 *
 * @api                {POST} /v1/ngo/article/{id}/comment Create Comment
 * @apiDescription     Create a comment on the Article
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiParam           {Text} body Comment body
 * @apiParam           {String} [parent_id] Comment's parent ID (e.g. an answer/replay)
 *
 * @apiUse             CommentSuccessSingleResponse
 *
 */

/** @var Route $router */
$router->post('ngo/article/{id}/comment', [
    'as' => 'api_article_create_comment',
    'uses'  => 'Controller@createComment',
    'middleware' => [
      'auth:api',
    ],
]);
