<?php

return [

    /*
     |--------------------------------------------------------------------------
     | Laravel CORS
     |--------------------------------------------------------------------------
     |

     | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
     | to accept any value.
     |
     */
    'supportsCredentials' => false,
    'allowedOrigins'      => ['api.outland.ir', 'admin.outland.ir', 'www.outland.ir', 'outland.ir'],
    'allowedHeaders'      => ['*'],//['Content-Type', 'Authorization', 'Accept'],
    'allowedMethods'      => ['GET'],
    'exposedHeaders'      => [],
    'maxAge'              => 0,
    'hosts'               => [],
];
