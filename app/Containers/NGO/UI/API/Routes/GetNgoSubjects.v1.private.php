<?php

/**
 * @apiGroup           NGO
 * @apiName            getNgoSubjects
 *
 * @api                {GET} /v1/ngo/resources/subject Get NGO Subjects
 * @apiDescription     Get all ngo subjects
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('ngo/resources/subject', [
    'as' => 'api_ngo_get_ngo_subjects',
    'uses'  => 'Controller@getNgoSubjects',
]);
