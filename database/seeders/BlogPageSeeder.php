<?php

namespace Database\Seeders;

use App\Models\CMSPages;
use Illuminate\Database\Seeder;

class BlogPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CMSPages::where('name', 'blog')->delete();
        $content = [
            'name' => 'Blog',
            'slug' => 'blog',
            'meta_title' => 'crystal-coast-canine-training',
            'meta_description' => 'crystal-coast-canine-training',
            'background_banner_image' => 'front/images/innerbnr1.webp',
            'content' => json_encode([
                'banner_heading' => "BLOGS AND ARTICLES",
                // "st_heading"=>"FREQUENTLY ASKED QUESTIONS",
                // "st_des"=>"Please reach us at if you cannot find an answer to your question."
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
