<?php

/**
 * @apiGroup           Article
 * @apiName            searchArticles
 *
 * @api                {GET} /v1/search/ngo/article?q= Search Articles
 * @apiDescription     Search the value of q parameter in articles
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             ArticleSuccessSingleResponse
 */

/** @var Route $router */
$router->get('search/ngo/article', [
    'as' => 'api_article_search_articles',
    'uses'  => 'Controller@searchArticles',
//    'middleware' => [
//      'auth:api',
//    ],
]);
