<?php

use Illuminate\Support\Facades\Hash;
//$factory = app('Illuminate\Database\Eloquent\Factory');

$factory->define(\App\Containers\User\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'first_name'     => $faker->firstName,
        'last_name'     => $faker->lastName,
        'email'    => $faker->unique()->safeEmail,
        'password' => $password ? : $password = Hash::make('testing-password'),
        'gender'     => $faker->randomElement(['male', 'female']),
        'birth'     => $faker->date($format = 'Y-m-d', $max = 'now'),
        'is_client'      => false,
        'remember_token' => str_random(10),
    ];
});

$factory->state(\App\Containers\User\Models\User::class, 'client', function (Faker\Generator $faker) {
    return [
        'is_client' => true,
    ];
});
