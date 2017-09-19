<?php

$factory->define(App\Containers\NGO\Models\NGO::class, function (Faker\Generator $faker) {

    return [
        'name'     => $faker->company,
        'description'     => $faker->realText(),
        'subject'    => $faker->word,
        'area_of_activity' => $faker->city,
        'address' => $faker->address,
        'registration_date'     => $faker->date($format = 'Y-m-d', $max = 'now'),
        'registration_number'     => random_int(70000, 110000),
        'national_number'     => random_int(10000, 110000),
        'license_number'     => random_int(10000, 110000),
        'license_date'     => $faker->date($format = 'Y-m-d', $max = 'now'),
        'logo_photo_path'     => random_int(100000000, 1100000000),
        'banner_photo_path'     => random_int(100000000, 1100000000),
    ];
});
