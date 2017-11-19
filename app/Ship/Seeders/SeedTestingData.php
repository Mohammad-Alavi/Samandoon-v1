<?php

namespace App\Ship\Seeders;

use App\Containers\Event\Models\Event;
use App\Containers\NGO\Models\NGO;
use App\Ship\Parents\Seeders\Seeder;

/**
 * Class SeedTestingData
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class SeedTestingData extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Containers\User\Models\User::class, 50)->
        create()->each(function ($ngo) {
            $ngo->ngo()->save(
                factory(NGO::class)->make()
            );
//                    ->each(function ($events){
//                        $events->events()->saveMany(factory(Event::class, 5)->make());
//                    });
            });

        $ngos = NGO::all();
        foreach ($ngos as $ngo) {
            factory(Event::class, rand(0, 50))->create(['ngo_id' => $ngo->id]);
        }
    }
}
