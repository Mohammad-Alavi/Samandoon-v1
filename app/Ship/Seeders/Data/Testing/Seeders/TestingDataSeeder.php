<?php

namespace App\Ship\Seeders\Data\Testing\Seeders;

use App\Containers\Event\Models\Event;
use App\Containers\NGO\Models\NGO;
use App\Containers\User\Data\Repositories\UserRepository;
use App\Containers\User\Models\User;
use App\Ship\Parents\Seeders\Seeder;
use Illuminate\Support\Facades\App;

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
        factory(User::class, 50)->create()
            ->each(function ($ngo){
                $ngo->ngo()->save(factory(NGO::class)->make());
//                    ->each(function ($events){
//                        $events->events()->saveMany(factory(Event::class, 5)->make());
//                    });
                });

        $ngos = NGO::all();
        foreach($ngos as $ngo){
            factory(Event::class, rand(0, 50))->create(['ngo_id' => $ngo->id]);
        }
    }

}
