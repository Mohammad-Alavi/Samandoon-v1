<?php

namespace App\Ship\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Vinkla\Hashids\Facades\Hashids;

/**
 * Class SeedTestingData
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class SeedTestingData extends Seeder
{
    public function run(Faker $faker)
    {
        $x = 0;
        $userArray = [];
        // Generate Fake Users
        while ($x < 50) {
            $generatedUser = Apiato::call('User@CreateUserByCredentialsTask', [
                $isClient = false,
                $faker->unique()->safeEmail,
                Hash::make('testing-password'),
                $faker->firstName,
                $faker->lastName,
                $faker->randomElement(['male', 'female']),
                $faker->date($format = 'Y-m-d', $max = 'now')
            ])->assignRole(Apiato::call('Authorization@FindRoleTask', ['User']));
            array_push($userArray, $generatedUser);
            $x++;
        }

        $fakeNNumber = 1654915498;
        $fakeRNumber = 1654915498;
        // Generate Fake NGO's for Fake Users
        $ngoArray = [];
        foreach ($userArray as $user) {
            $ngoData = [
                'name' => $faker->company,
                'address' => $faker->address,
                'status' => $faker->randomElement(['فعال', 'غیر فعال']),
                'verification_status' => $faker->randomElement(['unverified', 'verified', 'in_progress', 'requested']),
                'zip_code' => $faker->postcode,
                'type' => $faker->randomElement(['نوع یک', 'نوع دو', 'نوع سه', 'نوع چهار']),
                'national_number' => $fakeNNumber--,
                'public_name' => Hashids::encode($fakeNNumber),
                'registration_number' => $fakeRNumber++,
                'registration_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'registration_unit' => $faker->randomElement(['واحد ثبت چهار', 'واحد ثبت دو', 'واحد ثبت سه', 'واحد ثبت یک']),
                'user_id' => $user->id,
                'description' => $faker->text(),
                'area_of_activity' => $faker->randomElement(['شهرستان', 'استان', 'بین المللی', 'ملی', 'فرااستان']),
                'city' => $faker->city,
                'province' => $faker->city,
            ];
            array_push($ngoArray, Apiato::call('NGO@CreateNgoTask', [$ngoData, $user]));
        }

        // Generate Fake Events for Fake NGO's
        foreach ($ngoArray as $ngo) {
            $y = 0;
            while ($y < 20) {
                $eventData = [
                    'title' => $faker->title(),
                    'description' => $faker->realText(),
                    'city' => $faker->randomElement(['اهواز', 'آبادان', 'شوش', 'تهران', 'مشهد']),
                    'province' => $faker->randomElement(['رشت', 'بوشهر', 'تبریز', 'تهران', 'خوزستان']),
                    'address' => $faker->address,
                    'lat' => $faker->latitude,
                    'long' => $faker->longitude,
//                    'event_date' => $faker->date('YmdHiT'),
                    'ngo_id' => $ngo->id
                ];
                Apiato::call('Event@CreateEventTask', [$eventData]);
                $y++;
            }
        }

        // Generate Fake Events for Fake NGO's
        foreach ($ngoArray as $ngo) {
            $z = 0;
            while ($z < 25) {
                $articleData = [
                    'text' => $faker->text(),
                    'ngo_id' => $ngo->id,
                ];
                $article = Apiato::call('Article@CreateArticleTask', [$articleData]);
                $article->addMedia(storage_path('app/public/default_images/highnoon.jpg'))->preservingOriginal()->toMediaCollection('article_image');
                $z++;
            }
        }
//        factory(User::class, 50)->create()->each(function ($user) {
//            $user->ngo()->save(factory(NGO::class)->make());
////                    ->each(function ($events){
////                        $events->events()->saveMany(factory(Event::class, 5)->make());
////                    });
//            });
//
//        $ngos = NGO::all();
//        foreach ($ngos as $ngo) {
//            factory(Event::class, rand(0, 50))->create(['ngo_id' => $ngo->id]);
//        }
    }
}
