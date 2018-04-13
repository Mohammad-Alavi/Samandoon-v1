<?php

/**
 * @apiGroup           NGO
 * @apiName            UpdateNGO
 *
 * @api                {PUT} /v1/ngo/{id} Update NGO
 * @apiDescription     Update a given NGO
 *
 * @apiVersion         1.0.0
 * @apiPermission      Owner | Admin
 *
 * @apiParam           {text}  [description]
 * @apiParam           {String}  [area_of_activity] max:255
 * @apiParam           {String}  [city]
 * @apiParam           {String}  [province]
 * @apiParam           {text}  [address]
 * @apiParam           {String}  [zip_code] max:255
 * @apiParam           {image}  [ngo_logo]
 * @apiParam           {image}  [ngo_banner]
 * @apiParam           {json}  [phone] If you send an empty id -> "" a new phone record will be created. But if you send an id, if you have access to it then it will be updated otherwise an exception will be thrown at yo bitch face :| Example: [{"id" : "", "label" : "testLabel", "phone_number" : "06153224740"},
                                        {"id" : "5", "label" : "testLabel", "phone_number" : "06153224746"}]
 * @apiParam           {json}  [subject] To delete all subjects send an empty array -> []. To add or update subject send an array with subject ID's -> [1,3]. This subjects will replace the current subjects of NGO. e.g. if current subjects are [1,2] and you send [1,3], new subjects will be [1,3].
 *
 * @apiUse             NGOSuccessSingleResponse
*/

$router->put('ngo/{id}', [
    'uses'  => 'Controller@updateNgo',
    'middleware' => [
      'auth:api',
    ],
]);
