<?php

namespace Database\Seeders;

use App\Models\CMSPages;
use Illuminate\Database\Seeder;

class AboutPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CMSPages::where('name', 'About')->delete();
        $content = [
            'name' => 'About',
            'slug' => 'about',
            'meta_title' => 'fine-design',
            'meta_description' => 'fine-design',
            'background_banner_image' => 'front/images/mainBnnr.webp',
            'about_sec_rig_img' => 'front/images/aboutimg6.webp',
            'about_sec_img_2' => '',
            'content' => json_encode([
                'about_banner_title' => "About Me",
                'home_about_sec_heading' => 'Meet Susan…',
                'about_sec_des' => "Susan Ekizian became an interior designer over 20 years ago, inspired by the excitement she felt in transforming homes, giving each one its own personality. She expanded into real estate investment after 10 years, leveraging the synergy of design to accelerate investment returns for clients and partners. Susan has a gift for spotting potential, utilizing her expertise to tap into trends and demand in targeted markets to deliver investor returns and beautiful living spaces for clients and their families.
Susan’s design influences started during college when she transitioned from foreign languages and psychology and into design. This led to a move to Italy, embracing immersive local living that accelerated her interest and study of textiles, architecture and history. This experience and a life-long passion for travel has led Susan to integrate style influences from Europe, Asia and Latin America. Closer to home, nature and extended hikes in diverse natural settings from the Great Smoky Mountains to the Canadian Rockies provide context for connectivity with the natural environment to enhance and transform spaces.",
                'about_sec_heading_2' => '“When working with a client, it is so very important to get to know them. The design is meant to embrace and communicate who they are - delivering a beautiful, comfortable and welcoming environment for family and friends. It’s not at all about me. I work to bring a balance of the technical and the creative elements of design to deliver unique and personal projects for each client, often utilizing an ‘outdoors-in’ approach leveraging natural light, textiles and living plants inspired by the client and the location of the project. Design has also been a key element in my investment work, producing significantly higher investment returns, increasing the rates for rental properties and reducing the time to sale for investment properties.”
Susan’s work has delivered strong financial returns for investors as well as personalized design projects for families - most recently in resort and lake areas. She has also worked with clients in New York, California and Chicago’s Streeterville area along Lake Michigan and surrounding suburbs.',
                'about_sec_heading_3' => 'My Investment Journey…',
                'about_sec_des_3' => 'It began out of necessity. I had been designing homes for clients for years. When I became a single mother, I felt a necessity to generate additional income. It started with an investment. Using all of my available cash and my design capabilities, I decided to place a huge bet on my abilities - renovating and redesigning a property to increase the value, generating a big profit. That enabled the purchase of the next property which, ultimately, became a rental property. During this time, with these humble successes together with my design work, I was introduced to my first private money lender. This led to collaboration on multiple properties, producing strong investment returns. Each success - building excitement. Each project - learning, improving and strengthening my network. With nearly $5M in property sales and investment returns with multiple partners and my own portfolio, my focus is on scale, growing partnerships and accelerating investment returns.',
            ])
        ];

        $aboutData = collect($content)->except(
            'background_banner_image',
            'about_sec_rig_img',
            'about_sec_img_2',
        )->all();
        $page = CMSPages::create($aboutData);

        $page->clearMediaCollection('background_banner_image');
        $page->clearMediaCollection('about_sec_rig_img');
        $page->clearMediaCollection('about_sec_img_2');

        $background_banner_image = public_path($content['background_banner_image']);
        if (file_exists($background_banner_image))
            $page->copyMedia($background_banner_image)->toMediaCollection('background_banner_image');

        $about_right_image = public_path($content['about_sec_rig_img']);
        if (file_exists($about_right_image))
            $page->copyMedia($about_right_image)->toMediaCollection('about_sec_rig_img');

        $about_image_2 = public_path($content['about_sec_img_2']);
        if (file_exists($about_image_2))
            $page->copyMedia($about_image_2)->toMediaCollection('about_sec_img_2');

    }
}
