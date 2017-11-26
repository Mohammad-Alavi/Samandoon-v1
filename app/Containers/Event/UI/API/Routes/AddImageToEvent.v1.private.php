<?php

/**
 * @apiGroup           Event
 * @apiName            addImageToEvent
 *
 * @api                {POST} /v1/event/image Add image to event
 * @apiDescription     Add image to the given event
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated user
 *
 * @apiParam           {integer} event_id (required)
 * @apiParam           {image} image (required)
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

$router->post('event/image', [
    'as' => 'api_event_add_image_to_event',
    'uses'  => 'Controller@addImageToEvent',
    'middleware' => [
      'auth:api',
    ],
]);
