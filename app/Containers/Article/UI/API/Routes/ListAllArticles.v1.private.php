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
 * @apiExample         {url} Example usage:
 * api.samandoon.ngo/v1/ngo/article?filter=title;created_at&orderBy=title&sortedBy=asc&field=title&value=v&ngo_id=3mjzyg5dp5a0vwp6
 * @apiUse             NGOSuccessSingleResponse
*/

$router->get('ngo/article', [
    'as' => 'api_article_list_all_articles',
    'uses'  => 'Controller@listAllArticles',
    'middleware' => [
      'auth:api',
    ],
]);
