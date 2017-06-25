<?php

namespace App\Ship\Seeders\Data\Testing\Seeders;

use App\Containers\Event\Models\Event;
use App\Containers\NGO\Models\NGO;
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
//        factory(NGO::class, 50)
//            ->create()
//            ->each(function ($u){
//                $u->events()->saveMany(factory(Event::class, rand(2, 11))->make());
//            });

//        factory(Event::class, 100)->create();

        factory(User::class, 50)
            ->create()
            ->each(function ($u){
            $u->ngos()->saveMany(factory(NGO::class, rand(0, 3))->make())
                ->each(function ($u){
                $u->events()->saveMany(factory(Event::class, rand(2, 11))->make());
            });;
        });
    }

}
