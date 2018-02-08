<?php

/**
 * @apiGroup           Article
 * @apiName            createArticle
 *
 * @api                {POST} /v1/ngo/article Create Article
 * @apiDescription     Create an article
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiParam           {text}  text (required)
 * @apiParam           {image}  article_image (optional)
 *
 * @apiUse             ArticleSuccessSingleResponse
*/

/** @var Route $router */
$router->post('ngo/article', [
    'as' => 'api_article_create_article',
    'uses'  => 'Controller@createArticle',
    'middleware' => [
      'auth:api',
    ],
]);
