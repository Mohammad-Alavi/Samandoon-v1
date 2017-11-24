<?php

$factory->define(App\Containers\NGO\Models\NGO::class, function (Faker\Generator $faker) {

    return [
        'name'     => $faker->company,
        'description'     => $faker->realText(),
        'area_of_activity' => $faker->city,
        'address' => $faker->address,
        'zip_code' => $faker->postcode,
        'type' => $faker->creditCardType,
        'confirmed' => $faker->boolean(),
        'address' => $faker->address,
        'national_number'     => (string)random_int(10000, 110000),
        'registration_number'     => (string)random_int(70000, 110000),
        'registration_date'     => (string)$faker->date($format = 'Y-m-d', $max = 'now'),
        'registration_unit'     => $faker->company,
        'logo_photo'     => random_int(100000000, 1100000000),
        'banner_photo'     => random_int(100000000, 1100000000),
    ];
});
