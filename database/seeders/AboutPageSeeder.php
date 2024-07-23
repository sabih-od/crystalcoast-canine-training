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
            'meta_title' => 'crystal-coast-canine-training',
            'meta_description' => 'crystal-coast-canine-training',
            'background_banner_image' => 'front/images/innerbnr1.webp',
            'about_sec_story_img_1' => 'front/images/about-inner1.webp',
            'about_sec_story_img_2' => 'front/images/about-inner2.webp',
            'about_sec_story_img_3' => 'front/images/about-inner3.webp',
            'about_sec_des_img_1' => 'front/images/discount-img2.webp',
            'about_sec_des_img_2' => 'front/images/discount-img1.webp',
            'about_sec_des_img_3' => 'front/images/blog2.webp',
            'about_sec_hepl_img_1' => 'front/images/personimg2.webp',
            'about_sec_soc_img_1' => 'front/images/icon1.webp',
            'about_sec_soc_img_2' => 'front/images/icon2.webp',

            'content' => json_encode([
                'about_banner_title' => "ABOUT US",
                'about_loc_heading' => 'LOCATED IN',
                'about_loc_address' => "SURF CITY, NORTH CAROLINA",
                'about_loc_address_com' => "Servicing Pender, New Hanover, Onslow, Jones, Craven, and Carteret Counties",
                "about_sec_title1" => "OWNER/ HEAD TRAINER",
                "about_sec_head1" => "ELIZABETH",
                "about_sec_des1" => "Elizabeth is the owner of Crystal Coast Canine Training, LLC. She served in the U.S. Marine Corps and fell in love with Malinois and Dutch Shepherd. After having three Mals and a Dutch Shepherd she became passionate about training and breeding dogs to become high-functioning members of society.  She has worked with dogs for several years and continues to learn and grow. She believes that the most important aspect of dog training is communication. Over the years she has been to numerous training seminars and courses and conducted extensive research through multiple avenues to become the best balanced trainer she can be. She has learned many different approaches to training from some of the brightest minds in dog training and believes that not all dogs learn the same way. This belief has encouraged her to have a continuously evolving training program tailored to each and every dog",
                "about_sec_heading_2" => "HOW WE TRAIN OUR DOGS",
                "about_sec_des_2" => "Each dog comes from a different background.  Breed and age play an important role in how your dog will learn. Where one dog may excel, another may struggle. This is why we conduct in-person evaluations for each client prior to drop off. We ask specific questions about your dog and their environment. If you have children, we may conduct more training around young individuals, whereas, if you do not and you frequent sporting events, training may be focussed around that setting. When we first meet, it is important to share all pertinent information, so we may provide the best customized training for your dog.",
                "about_sec_desc_3" => "<h3>BREEDING</h3>

<p>HOW WE RAISE OUR PUPPIES</p>

<p>All of our dogs are raised in a healthy and loving atmosphere. Each is worked and played with daily and fed high-quality food. We have a young teen and a toddler so every puppy grows up with children and is exposed to different animals and sounds. At the age of two weeks, (once they&#39;re standing and have open eyes) the pups are litter box trained and exposed to nervous system training.</p>

<p>OUR PROCESS</p>

<p>Once each puppy turns one month old they are introduced to different training environments. Simply put, we will begin placing them in situations they will encounter once they go to their new homes. Car rides, loud noises, bathing, potty training, leash walking, and meal time manners. When you take your pup home we want it to be the least stressful experience possible.</p>

<p>WHAT WE FEED OUR PUPS</p>

<p>From the age of 3 weeks to 6 months we feed Purina Pro Plan Puppy Under 1 Year. This provides the needed nutrients for a growing puppy. This is a higher Protein food for active breeds like Dutch Shepherd and Belgian Malinois.</p>
",
                "about_sec_des_head_1" => "For Multiple dogs",
                "about_sec_des_des_1" => "This discount may be applied when any client has multiple dogs living in the same home.
                                For each additional dog after the first, there will be a 20% discount applied. This
                                discount may be applied to any training package.",
                "about_sec_des_off1" => "20%",
                "about_sec_des_head2" => "to active duty military, veterans, law enforcement, and first responders",
                "about_sec_des_des2" => "This discount may be applied to any puppy sale or training. Proof of service or employment must be provided for a discount to be applied.",
                "about_sec_des_off2" => "15%",
                "about_sec_des_head3" => "to seniors over 60 years old",
                "about_sec_des_desc3" => " This discount may be applied to any training package.",
                "about_sec_des_off3" => "10%",
                "about_sec_help_head" => "HELP OUR CAUSE",
                "about_sec_help_des" => "Crystal Coast Canine Training is a veteran-owned and operated dog training and breeding organization. We cater to Veterans and their families. We know the struggle of life after the Military. A service dog can be extremely beneficial to and even save the life of a Veteran. Any time we have donations, the funds go toward training a service dog for a veteran in need.",
                "about_sec_help_btn" => "Donate Now",
                "about_sec_soc_head" => "FOLLOW ON SOCIAL MEDIA",
                
                "about_sec_des_title"=>'discounts'
            ])
        ];

        $aboutData = collect($content)->except(
            'background_banner_image',
            'about_sec_story_img_1',
            'about_sec_story_img_2',
            'about_sec_story_img_3',
            'about_sec_des_img_1',
            'about_sec_des_img_2',
            'about_sec_des_img_3',
            'about_sec_hepl_img_1',
            'about_sec_soc_img_1',
            'about_sec_soc_img_2',


        )->all();
        $page = CMSPages::create($aboutData);

        $page->clearMediaCollection('background_banner_image');
        $page->clearMediaCollection('about_sec_story_img_1');
        $page->clearMediaCollection('about_sec_story_img_2');
        $page->clearMediaCollection('about_sec_story_img_3');
        $page->clearMediaCollection('about_sec_des_img_1');
        $page->clearMediaCollection('about_sec_des_img_2');
        $page->clearMediaCollection('about_sec_des_img_3');
        $page->clearMediaCollection('about_sec_hepl_img_1');
        $page->clearMediaCollection('about_sec_soc_img_1');
        $page->clearMediaCollection('about_sec_soc_img_2');

        $background_banner_image = public_path($content['background_banner_image']);
        if (file_exists($background_banner_image))
            $page->copyMedia($background_banner_image)->toMediaCollection('background_banner_image');

        $about_right_image = public_path($content['about_sec_story_img_1']);
        if (file_exists($about_right_image))
            $page->copyMedia($about_right_image)->toMediaCollection('about_sec_story_img_1');

        $about_image_2 = public_path($content['about_sec_story_img_2']);
        if (file_exists($about_image_2))
            $page->copyMedia($about_image_2)->toMediaCollection('about_sec_story_img_2');

        $about_image_2 = public_path($content['about_sec_story_img_3']);
        if (file_exists($about_image_2))
            $page->copyMedia($about_image_2)->toMediaCollection('about_sec_story_img_3');


        $about_image_2 = public_path($content['about_sec_des_img_1']);
        if (file_exists($about_image_2))
            $page->copyMedia($about_image_2)->toMediaCollection('about_sec_des_img_1');


        $about_image_2 = public_path($content['about_sec_des_img_2']);
        if (file_exists($about_image_2))
            $page->copyMedia($about_image_2)->toMediaCollection('about_sec_des_img_2');

        $about_image_2 = public_path($content['about_sec_des_img_3']);
        if (file_exists($about_image_2))
            $page->copyMedia($about_image_2)->toMediaCollection('about_sec_des_img_3');


        $about_image_2 = public_path($content['about_sec_hepl_img_1']);
        if (file_exists($about_image_2))
            $page->copyMedia($about_image_2)->toMediaCollection('about_sec_hepl_img_1');

        $about_image_2 = public_path($content['about_sec_soc_img_1']);
        if (file_exists($about_image_2))
            $page->copyMedia($about_image_2)->toMediaCollection('about_sec_soc_img_1');

        $about_image_2 = public_path($content['about_sec_soc_img_2']);
        if (file_exists($about_image_2))
            $page->copyMedia($about_image_2)->toMediaCollection('about_sec_soc_img_2');


    }
}
