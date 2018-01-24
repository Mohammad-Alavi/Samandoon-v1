<?php

/**
 * @apiGroup           Article
 * @apiName            listAllArticles
 *
 * @api                {GET} /v1/ngo/article List all Articles
 * @apiDescription     Lists all Articles (if no query parameter is given)
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiUse             NGOSuccessSingleResponse
*/

$router->get('ngo/article', [
    'as' => 'api_article_list_all_articles',
    'uses'  => 'Controller@listAllArticles',
    'middleware' => [
      'auth:api',
    ],
]);
