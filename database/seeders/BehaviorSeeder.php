<?php

namespace Database\Seeders;

use App\Models\Behavior;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BehaviorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('behaviors')->truncate();
        $behaviorData = [
            ['title' => 'Aggression'],
            ['title' => 'Jumping on you or guests'],
            ['title' => 'Excessive barking'],
            ['title' => 'Pulling on the leash'],
            ['title' => 'Counter surfing'],
            ['title' => 'Anxiety'],
            ['title' => 'Reactivity'],
            ['title' => 'Biting'],
            ['title' => 'Rough play'],
            ['title' => 'Poor manners'],
            ['title' => 'Stubborn behavior'],
        ];
        $imageData = [
            'photo_1' => ['front/images/gall1.webp'],
            'photo_2' => ['front/images/gall2.webp'],
            'photo_3' => ['front/images/gall3.webp'],
            'photo_4' => ['front/images/gall4.webp'],
            'photo_5' => ['front/images/gall5.webp'],
            'photo_6' => ['front/images/gall6.webp'],
            'photo_7' => ['front/images/gall10.webp'],
            'photo_8' => ['front/images/gall11.webp'],
            'photo_9' => ['front/images/gall12.webp'],
            'photo_10' => ['front/images/gall13.webp'],
            'photo_11' => ['front/images/gall14.webp'],
        ];
        foreach ($behaviorData as $index => $behavior) {
            $blog = Behavior::create($behavior);

            $imageKeys = 'photo_' . ($index + 1);
            $imagePaths = $imageData[$imageKeys];
            foreach ($imagePaths as $imagePath) {
                $blog->addMedia(public_path($imagePath))->toMediaCollection('behavior_img');
            }
        }
    }
}
