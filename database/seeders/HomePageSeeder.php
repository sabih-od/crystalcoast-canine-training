<?php

namespace Database\Seeders;

use App\Models\CMSPages;
use Illuminate\Database\Seeder;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CMSPages::where('name', 'Home')->delete();
        $content = [
            'name' => 'Home',
            'slug' => 'home',
            'meta_title' => 'fine-design',
            'meta_description' => 'fine-design',
            'background_banner_image' => 'images/ban1.webp',
            'content' => json_encode([
                'banner_heading' => "Investments",
                'banner_para'=>'Wealth By Design',
                'banner_btn'=>"Let’s Discuss Your Project",
                'banner_heading1'=>'Living Spaces',
                'banner_heading2'=>'Life'
                ])
        ];

        $homeData = collect($content)->except(
            'background_banner_image',
          
        )->all();

        $page = CMSPages::create($homeData);

        $page->clearMediaCollection('background_banner_image');
       

        $banner_image1 = public_path($content['background_banner_image']);
        if (file_exists($banner_image1)) $page->copyMedia($banner_image1)->toMediaCollection('background_banner_image');
    }
}
