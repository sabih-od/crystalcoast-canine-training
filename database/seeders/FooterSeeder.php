<?php

namespace Database\Seeders;

use App\Models\CMSPages;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CMSPages::where('name', 'Footer')->delete();
        $content = [
            'name' => 'Footer',
            'slug' => 'footer',
            'meta_title' => 'collectors_auctions',
            'meta_description' => 'collectors_auctions',
            'footer_logo' => 'images/footerlogo.webp',
            'content' => json_encode([
                'link1' => "",
                'link2' => "",
                'link3' => "",
                'link4' => "",
                'footer_text' => "Collectors Auctions, All Right Reserved.",

            ])
        ];

        $footerData = collect($content)->except(
            'footer_logo',

        )->all();
        $page = CMSPages::create($footerData);

        $page->clearMediaCollection('footer_logo');


        $footer_logo = public_path($content['footer_logo']);
        if (file_exists($footer_logo)) $page->copyMedia($footer_logo)->toMediaCollection('footer_logo');



    }
}
