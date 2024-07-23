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
        CMSPages::where('name', 'Contact Us')->delete();
        $content = [
            'name' => 'Contact Us',
            'slug' => 'contact',
            'meta_title' => 'crystal-coast-canine-training',
            'meta_description' => 'crystal-coast-canine-training',
            'background_banner_image' => 'front/images/innerbnr1.webp',
            'contact_page_story_image' => 'front/images/contactpage1.webp',
            'content' => json_encode([
                'contact_banner_title' => "CONTACT US",
                'contact_form_heading' => "GET IN TOUCH",
                'contact_btn' => "Send Now",
                'contact_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3290.463558300061!2d-77.5621941236712!3d34.44037889713528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89a9a28184d8ef7b%3A0x958d944d273b3c01!2s127%20J%20H%20Batts%20Rd%2C%20Hampstead%2C%20NC%2028443%2C%20USA!5e0!3m2!1sen!2s!4v1717454112060!5m2!1sen!2s',
                'contact_sto_head' => "JOIN OUR TEAM",
                "contact_page_story_des" => "<p 'class='pb-3'>Crystal Coast Canine Training is now accepting applications for our recently open Part Time (15-20 hours per week) Kennel Technician position. This is an opportunity for someone looking for a part time job working with dogs. This position is not that of a trainer, but if the applicant has a desire and shows potential, they may be trained and transitioned into a trainer position.</p>

<p>Requirement: Must have reliable transportation to Surf City daily, must be able to lift 50 lbs, must be able to control/ walk a variety of dogs, must be comfortable with facing new challenges, must work well with others, must be professional and tidy at all times.</p>
",
                "contact_form_heading_1" => "FILL OUT THE FORM",
                "contact_btn_1" => "Submit Application",
                "contact_loc_head" => "LOCATION:",
                "contact_loc_des" => "127 J H Batts Road, Surf City, North Carolina 28445, United States",
                "contact_phone_head" => "PHONE:",
                "contact_time_head" => "Hours:",
                "contact_time_des" => "<ul class='clockList'>
                            <li>Mon 09:00 am – 05:00 pm</li>
                            <li> Tue 09:00 am – 05:00 pm</li>
                            <li> Wed 09:00 am – 05:00 pm</li>
                            <li> Thu 09:00 am – 05:00 pm</li>
                            <li> Fri 09:00 am – 05:00 pm</li>
                            <li> Sat 09:00 am – 05:00 pm</li>
                            <li> Sun 09:00 am – 05:00 pm</li>
                        </ul>",
            ])
        ];

        $contactData = collect($content)->except(
            'background_banner_image',
            'contact_page_story_image',
        )->all();
        $page = CMSPages::create($contactData);

        $page->clearMediaCollection('background_banner_image');


        $background_banner_image = public_path($content['background_banner_image']);
        if (file_exists($background_banner_image))
            $page->copyMedia($background_banner_image)->toMediaCollection('background_banner_image');

        $background_banner_image = public_path($content['contact_page_story_image']);
        if (file_exists($background_banner_image))
            $page->copyMedia($background_banner_image)->toMediaCollection('contact_page_story_image');

    }
}
