<?php

/**
 * @apiGroup           Article
 * @apiName            deleteComment
 *
 * @api                {DELETE} /v1/ngo/article/{id}/comment/{comment_id} Delete Comment
 * @apiDescription     Delete the specified comment
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated -> Owner/Admin
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 204 No Content
{

}
 */

/** @var Route $router */
$router->delete('ngo/article/{id}/comment/{comment_id}', [
    'as' => 'api_article_delete_comment',
    'uses'  => 'Controller@deleteComment',
    'middleware' => [
      'auth:api',
    ],
]);
