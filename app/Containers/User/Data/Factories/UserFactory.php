<?php

use Illuminate\Support\Facades\Hash;

$factory->define(App\Containers\User\Models\User::class, function (Faker\Generator $faker) {

    return [
        'first_name'     => $faker->firstName,
        'last_name'     => $faker->lastName,
        'email'    => $faker->email,
        'password' => Hash::make('testing-password'),
        'confirmed'     => $faker->boolean(),
        'device'     => str_random(7, 13),
        'platform'     => $faker->randomElement(['android', 'ios', 'web', 'desktop']),
        'gender'     => $faker->randomElement(['male', 'female']),
        'birth'     => $faker->date($format = 'Y-m-d', $max = 'now'),
        'is_client' => false,
        'province' => $faker->city,
        'city' => $faker->city,
    ];
});

$factory->state(App\Containers\User\Models\User::class, 'client', function ($faker) {
    return [
        'is_client' => true,
    ];
});
