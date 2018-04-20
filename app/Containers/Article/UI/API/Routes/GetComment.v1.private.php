<?php

/**
 * @apiGroup           Article
 * @apiName            getComment
 *
 * @api                {GET} /v1/ngo/article/{id}/comment/{comment_id} Get Comment
 * @apiDescription     Get a single comment of the specified article
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             CommentSuccessSingleResponse
 *
 */

/** @var Route $router */
$router->get('ngo/article/{id}/comment/{comment_id}', [
    'as' => 'api_article_get_comment',
    'uses'  => 'Controller@getComment',
]);
