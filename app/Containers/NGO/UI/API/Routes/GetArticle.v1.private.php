<?php

/**
 * @apiGroup           NGO
 * @apiName            getArticle
 *
 * @api                {GET} /v1/ngo/article/{id} Find Article by id
 * @apiDescription     Find an Article by id
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             ArticleSuccessSingleResponse
 *
 */

/** @var Route $router */
$router->get('ngo/article/{id}', [
    'as' => 'api_ngo_get_article',
    'uses'  => 'Controller@getArticle',
]);
