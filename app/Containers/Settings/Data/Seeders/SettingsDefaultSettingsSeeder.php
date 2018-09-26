<?php

namespace App\Containers\Settings\Data\Seeders;

use App\Containers\Settings\Models\Setting;
use App\Ship\Parents\Seeders\Seeder;

/**
 * Class SettingsDefaultSettingsSeeder
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class SettingsDefaultSettingsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $settings = new Settings();
//        $settings->key = 'referring_user_points';
//        $settings->value = '200';
//        $settings->save();
//
//        $settings = new Settings();
//        $settings->key = 'referred_user_points';
//        $settings->value = '200';
//        $settings->save();

        $settings = new Setting();
        $settings->key = 'is_in_maintance_mode';
        $settings->value = 'true';
        $settings->save();

        $settings = new Setting();
        $settings->key = 'in_maintance_mode_message';
        $settings->value = 'برنامه نویسان مشغول کارند!';
        $settings->save();

        $settings = new Setting();
        $settings->key = 'least_android_version_code';
        $settings->value = 100;
        $settings->save();

        $settings = new Setting();
        $settings->key = 'least_android_version_name';
        $settings->value = "14.21.36.100";
        $settings->save();

        $settings = new Setting();
        $settings->key = 'current_android_version_code';
        $settings->value = 500;
        $settings->save();

        $settings = new Setting();
        $settings->key = 'current_android_version_name';
        $settings->value = "18.16.24.500";
        $settings->save();

        $settings = new Setting();
        $settings->key = 'least_ios_version';
        $settings->value = 1000;
        $settings->save();

        $settings = new Setting();
        $settings->key = 'current_ios_version';
        $settings->value = 500;
        $settings->save();

        $settings = new Setting();
        $settings->key = 'update_android_url';
        $settings->value = 'www.google.com';
        $settings->save();

        $settings = new Setting();
        $settings->key = 'update_ios_url';
        $settings->value = 'www.google.com';
        $settings->save();

        $settings = new Setting();
        $settings->key = 'is_payment_allowed';
        $settings->value = 'true';
        $settings->save();

        $settings = new Setting();
        $settings->key = 'is_login_allowed';
        $settings->value = 'true';
        $settings->save();

        $settings = new Setting();
        $settings->key = 'is_registration_allowed';
        $settings->value = 'true';
        $settings->save();

        $settings = new Setting();
        $settings->key = 'is_ngo_creation_allowed';
        $settings->value = 'true';
        $settings->save();

        $settings = new Setting();
        $settings->key = 'is_new_article_allowed';
        $settings->value = 'true';
        $settings->save();

        $settings = new Setting();
        $settings->key = 'is_new_event_allowed';
        $settings->value = 'true';
        $settings->save();
    }
}
