<?php

namespace Database\Seeders;

use App\Models\Training;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainings')->truncate();
        $trainingData = [
            [
                'title' => 'BASIC OBEDIENCE',
                'description' => 'Teach your dog basic commands like sit, stay, come, off, no, and heel with our obedience training programs. Our expert trainers use balanced training techniques to make learning interactive for your dog.',
            ],
            [
                'title' => 'ADVANCED OBEDIENCE',
                'description' => "Take your dog's obedience skills to the next level with our advanced obedience training programs. Our trainers can teach your dog more complex commands and behaviors, such as off-leash training and recall.",
            ],
            [
                'title' => 'BEHAVIOR MODIFICATION',
                'description' => 'Does your dog have problem behaviors like jumping, barking, or digging? Our behavior modification programs can help address these issues and teach your dog more appropriate behaviors.',
            ],
        ];
        $imageData = [
            'photo_1' => ['front/images/train1.webp'],
            'photo_2' => ['front/images/train2.webp'],
            'photo_3' => ['front/images/train3.webp'],
        ];
        foreach ($trainingData as $index => $training) {
            $blog = Training::create($training);

            $imageKeys = 'photo_' . ($index + 1);
            $imagePaths = $imageData[$imageKeys];
            foreach ($imagePaths as $imagePath) {
                $blog->addMedia(public_path($imagePath))->toMediaCollection('training_img');
            }
        }
    }
}
