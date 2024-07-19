<?php

namespace Database\Seeders;

use App\Models\CMSPages;
use Illuminate\Database\Seeder;

class ContactPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CMSPages::where('name', 'Contact')->delete();
        $content = [
            'name' => 'Contact',
            'slug' => 'contact',
            'meta_title' => 'fine-design',
            'meta_description' => 'fine-design',
            'background_banner_image' => 'images/ban1.webp',
            'content' => json_encode([
                'contact_banner_title' => "Contact",
                'contact_form_heading' => "Contact",
                'contact_form_para' => "I’d love to hear from you. Let’s collaborate! ",
                'contact_imp_text'=>'Susan',
                'contact_btn'=>'Submit Now'

            ])
        ];

        $contactData = collect($content)->except(
            'background_banner_image',
        )->all();
        $page = CMSPages::create($contactData);

        $page->clearMediaCollection('background_banner_image');


        $background_banner_image = public_path($content['background_banner_image']);
        if (file_exists($background_banner_image)) $page->copyMedia($background_banner_image)->toMediaCollection('background_banner_image');

    }
}
