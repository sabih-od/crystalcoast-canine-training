<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = Setting::create([
            'phone_no' => 'tel:+2527250674',
            'address' => 'https://maps.app.goo.gl/Pq9QG2mp2bCe9oyMA',
            'email' => 'mailto:info@example.com',
            'footer_bottom_text' => "2024 CRYSTAL COAST CANINE Training - All Rights Reserved."
            ,'social_link_1'=>"https://www.facebook.com/CrystalCoastCanines/",
            'social_link_2'=>'https://www.instagram.com/cc.canine.training?igsh=MXgwd243Y2JkZml3ZA==',
            "social_link_3"=>'https://www.yelp.com/biz/crystal-coast-canine-training-surf-city-2'
        ]);

        $setting->clearMediaCollection('header_logo');

        $header_logo = public_path('front/images/logo.webp');
        if (file_exists($header_logo)) $setting->copyMedia($header_logo)->toMediaCollection('header_logo');

        $setting->clearMediaCollection('footer_logo');

        $footer_logo = public_path('front/images/footerlogo.webp');
        if (file_exists($footer_logo)) $setting->copyMedia($footer_logo)->toMediaCollection('footer_logo');
    }

}

