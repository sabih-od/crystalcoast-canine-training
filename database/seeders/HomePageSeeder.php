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
            'meta_title' => 'crystal-coast-canine-training',
            'meta_description' => 'crystal-coast-canine-training',
            'background_banner_image' => 'front/images/dogslide.webp',
            'dic_img_1' => 'front/images/law1.webp',
            'dic_img_2' => 'front/images/law2.webp',
            'evo_img' => 'front/images/personimg.webp',
            "st_image"=>"front/images/about1.webp",
            'content' => json_encode([
                'banner_heading' => "CRYSTAL COAST",
                'banner_para' => "“Be the most interesting human your dog has ever met.“",
                'banner_heading1' => 'CANINE TRAINING',
                'banner_heading2' => 'Ralf Weber',
                "dis_heading" => "MILITARY/LAW ENFORCEMENT",
                "dis_cir_heading" => "DISCOUNT",
                "dis_cir_per" => "15%",
                "dis_heading_1" => "MULTIPLE DOG",
                "dis_cir_heading_1" => "DISCOUNT",
                "dis_cir_per_1" => "20%",
                "evo_title" => "DON’T KNOW WHERE TO BEGIN?",
                "evo_heading" => "IN-PERSON EVALUATIONS",
                "evo_discreption" => "Understanding what’s going on with your pup can be a tough battle. With our in-person evaluations, our trainers have the ability to meet your dog and recommend the right training program for you and your best friend.",
                "evo_btn" => "Book Evaluation",
                "sch_heading"=>"SCHEDULE AN IN-PERSON EVALUATION TODAY",
                "sch_btn"=>"SCHEDULE EVALUATION",
                "st_title"=>"HELLO",
                "st_heading"=>"EXPERT DOG TRAINING",
                "st_des"=>"Welcome to CRYSTAL COAST CANINE TRAINING LLC! We are dedicated to providing effective and personalized dog training services to help you and your furry friend bond and live happily ever after. Contact us today to schedule a consultation and take the first step towards a well-behaved dog.",
                "st_btn"=>"Find Out More"
            ])
        ];

        $homeData = collect($content)->except(
            'background_banner_image',
            'dic_img_1',
            'dic_img_2',
            'evo_img',
            'st_image'

        )->all();

        $page = CMSPages::create($homeData);

        $page->clearMediaCollection('background_banner_image');
        $page->clearMediaCollection('dic_img_1');
        $page->clearMediaCollection('dic_img_2');
        $page->clearMediaCollection('evo_img');


        $background_banner_image = public_path($content['background_banner_image']);
        if (file_exists($background_banner_image)) $page->copyMedia($background_banner_image)->toMediaCollection('background_banner_image');
     
        $background_banner_image = public_path($content['dic_img_1']);
        if (file_exists($background_banner_image)) $page->copyMedia($background_banner_image)->toMediaCollection('dic_img_1');
        
        $background_banner_image = public_path($content['dic_img_2']);
        if (file_exists($background_banner_image)) $page->copyMedia($background_banner_image)->toMediaCollection('dic_img_2');
        
        $background_banner_image = public_path($content['evo_img']);
        if (file_exists($background_banner_image)) $page->copyMedia($background_banner_image)->toMediaCollection('evo_img');

        $background_banner_image = public_path($content['st_image']);
        if (file_exists($background_banner_image)) $page->copyMedia($background_banner_image)->toMediaCollection('st_image');

    }
}
