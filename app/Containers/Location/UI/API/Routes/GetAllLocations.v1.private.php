<?php

/**
 * @apiGroup           Location
 * @apiName            getAllLocations
 *
 * @api                {GET} /v1/location Lists All Locations
 * @apiDescription     Lists all locations (cities and province) in a convincing manner
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": [
        {
            "province": "آذربایجان شرقی",
            "cities": [
            "اهر",
            "هوراند",
            "باسمنج",
            "تبريز",
            "سردرود",
            "خسروشاه",
            "سراب",
            .
            .
            .
}
        */
/** @var Route $router */
$router->get('location', [
    'as' => 'api_location_get_all_locations',
    'uses'  => 'Controller@getAllLocations',
//    'middleware' => [
//      'auth:api',
//    ],
]);
