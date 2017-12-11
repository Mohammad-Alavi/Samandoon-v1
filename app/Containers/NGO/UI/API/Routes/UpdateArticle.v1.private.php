<?php

/**
 * @apiGroup           NGO
 * @apiName            updateArticle
 *
 * @api                {PUT} /v1/ngo/article/{id} Update Article
 * @apiDescription     Update and Article
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated
 *
 * @apiParam           {String}  title
 * @apiParam           {text}  text
 *
 * @apiUse             ArticleSuccessSingleResponse
 */

/** @var Route $router */
$router->put('ngo/article/{id}', [
    'as' => 'api_ngo_update_article',
    'uses'  => 'Controller@updateArticle',
    'middleware' => [
      'auth:api',
    ],
]);
