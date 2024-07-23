<?php

namespace Database\Seeders;

use App\Models\CMSPages;
use Illuminate\Database\Seeder;

class GraduatePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CMSPages::where('name', 'Graduate')->delete();
        $content = [
            'name' => 'Graduate',
            'slug' => 'graduate',
            'meta_title' => 'crystal-coast-canine-training',
            'meta_description' => 'crystal-coast-canine-training',
            'background_banner_image' => 'front/images/innerbnr1.webp',
            'content' => json_encode([
                'banner_heading' => "GALLERY AND GRADUATES",
            ])
        ];

        $homeData = collect($content)->except(
            'background_banner_image',
        )->all();

        $page = CMSPages::create($homeData);

        $page->clearMediaCollection('background_banner_image');



        $background_banner_image = public_path($content['background_banner_image']);
        if (file_exists($background_banner_image))
            $page->copyMedia($background_banner_image)->toMediaCollection('background_banner_image');

    }
}
