<?php

$factory->define(App\Containers\Event\Models\Event::class, function (Faker\Generator $faker) {

    return [
        'title'     => $faker->title,
        'description'    => $faker->realText(),
        'event_date' => $faker->dateTime($format = 'Y-m-d-H-i-T'),
        'location' => $faker->address,
    ];
});
