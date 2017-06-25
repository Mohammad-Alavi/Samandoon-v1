<?php

$factory->define(App\Containers\NGO\Models\NGO::class, function (Faker\Generator $faker) {

    return [
        'name'     => $faker->company,
        'description'     => $faker->realText(),
        'subject'    => $faker->word,
        'province' => $faker->city,
        'city' => $faker->city,
        'address' => $faker->address,
        'registration_date'     => $faker->date($format = 'Y-m-d', $max = 'now'),
        'registration_number'     => random_int(70000, 110000),
        'national_number'     => random_int(70000, 110000),
        'license_number'     => random_int(70000, 110000),
        'license_date'     => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
