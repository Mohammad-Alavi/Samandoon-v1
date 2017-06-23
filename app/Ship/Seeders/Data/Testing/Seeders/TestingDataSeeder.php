<?php

namespace App\Ship\Seeders\Data\Testing\Seeders;

use App\Containers\Event\Models\Event;
use App\Containers\User\Models\User;
use App\Ship\Parents\Seeders\Seeder;

/**
 * Class TestingDataSeeder
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class TestingDataSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Event::class, 500)->create();
        factory(User::class, 500)->create();
    }

}
