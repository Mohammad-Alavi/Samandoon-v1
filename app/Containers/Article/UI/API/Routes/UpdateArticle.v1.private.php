<?php

/**
 * @apiGroup           Article
 * @apiName            updateArticle
 *
 * @api                {PUT} /v1/ngo/article/{id} Update Article
 * @apiDescription     Update and Article
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiParam           {String}  title (optional) max:255
 * @apiParam           {text}  text (optional)
 * @apiParam           {image}  article_image (optional)
 *
 * @apiUse             ArticleSuccessSingleResponse
 */

/** @var Route $router */
$router->put('ngo/article/{id}', [
    'as' => 'api_article_update_article',
    'uses'  => 'Controller@updateArticle',
    'middleware' => [
      'auth:api',
    ],
]);
