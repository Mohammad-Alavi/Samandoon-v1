<?php

$router->get('/user', [
    'as'   => 'get_user_home_page',
    'uses' => 'Controller@sayWelcome',
]);

$router->get('password/reset', [
    'as' => 'user_get_reset_password',
    'uses'  => 'Controller@getResetPassword',
]);

$router->post('password/reset/{email?}/{token?}', [
    'as' => 'user_post_reset_password',
    'uses'  => 'Controller@postResetPassword',
]);