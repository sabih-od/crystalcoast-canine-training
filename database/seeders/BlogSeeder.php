<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->truncate();

        $blogData = [
            [
                'title' => 'Behavior',
                'heading' => 'PROTECTING YOUR DOG',
                'description' => "<p>
                            Anxiety, stress, and fear can create health issues too. They can cause your dog to get
                            ulcers, hotspots, and even cause excessive biting and itching at paws and tails. Who's
                            guilty of letting everyone who asks pet your dog? Or dragging your dog through a doorway
                            just to get inside? What about letting other dogs invade their space at the dog park? These
                            actions can cause immense levels of anxiety and if you don't attack these issues right away
                            they can create a fearful and potentially aggressive dog.
                        </p>
                        <p>
                            By understanding our pups needs and comfort levels it allows us to know how far we can push
                            them and know in what areas they need improvement. We all want a pup that can go anywhere
                            and thrive in any environment, but we have to expose them in the right increments.
                        </p>
                        <p>
                            If you have had any issue with what is listed above, check out our recommendations to help
                            tackle them to prevent larger issues.
                        </p>
                        <p>
                            Strangers petting your dog-
                        </p>
                        <p>
                            I personally do not let many people pet my personal dogs and dogs that I am training. I want
                            my dogs to be social with people and be able to say hello, but if they say hello to
                            everyone, it can create a high desire to be pet every time we go in public. Now my dogs are
                            working line, so that behavior is unacceptable. On the other end of the spectrum, if a dog
                            is uncomfortable around strangers and many are allowed to pet them, it can create immediate
                            behavior such as barking, nipping, pulling away, or trembling. To avoid this, I usually will
                            let people know that my dog is anxious and is not okay to be pet, or simply say 'no' he or
                            she is training.
                        </p>
                        <p>
                            Fear of walking through doorways-
                        </p>
                        <p>
                            Some dogs that have not been out and about much may show signs of fear toward doorways,
                            strange objects, and crowds in public, specifically automatic doors and cash registers. It
                            is important to ease your dogs nerves by allowing them to enter at their own pace. I don't
                            expect you to stand there all day and wait, but using treats or a toy to lure him or her
                            through the area and not rushing is a good place to start. It is best practice to start out
                            in a less populated store like Tractor Supply or Lowes (Garden entrance) on an weekday when
                            there aren't many people or dogs out.
                        </p>
                        <p>
                            Socialization with other dogs-
                        </p>
                        <p>
                            Socializing your pup with other dogs can be tough if your dog is reactive or becomes anxious
                            around others. If you are meeting a new dog for the first time, it can be extremely
                            beneficial to have your dog go on a walk with him or her. Have the other owner and dog
                            accompany you and your pup on a nice quiet walk on a trail or calm road. This gives the dogs
                            an opportunity to familiarize themselves before being nose to nose or off leash in a yard or
                            field. Once they are comfortable with each other, you can proceed to a closer introduction.
                        </p>
                        <p>
                            When we protect our dogs from potentially dangerous and stressful situations we can prevent
                            long lasting effects, so exposing your dog to different environments, sounds, and situations
                            in small increments will help create a more confident and well rounded dog. If you have
                            difficulty with any of this and are uncomfortable doing it on your own, it is wise to see
                            professional help.
                        </p>",
                'short_description' => "  <p>
                        We all know we are supposed to protect our dogs from illness and disease. We spend hundreds
                        if not thousands per year on health tests, spay/neuter, flea/ tick/various worm
                        preventatives, and even countless dollars on collars, leashes, and sometimes clothing.
                    </p>",
                "is_feature" => '0',
                'button_text' => 'Continue Reading',

            ],
            [
                'title' => 'Behavior',
                'heading' => 'The "Welfare" Dog',
                'description' => "<p> It is common for
                            household dogs past the puppy phase (and some still in the puppy phase) to lose interest in
                            working for food. Many people will comment about their dog not having that food drive; but
                            in reality, the dog has received 'free' food for so long that there is no reason to work for
                            it.</p>
                             <p>
                            In these cases, we have to reintroduce the desire to follow the food. Food luring is a
                            popular way to teach new commands and even tricks, because the dog follows the food with his
                            nose. We must remove the idea of being on welfare and create a job for them, whether he's
                            providing a service or just being a well-behaved pup. By removing the bowl your dog eats
                            from and replacing it with your hand, he is realizing it comes from YOU. We can ask him to
                            sit, down, heel, fetch, etc in return for food. If no effort is given by the dog, then no
                            food is received.
                        </p>
                        <p>
                            If we want our dogs to work, we must also be willing to work and create a job for them.
                        </p>
                            ",
                'short_description' => "<p>
                        If you have ever heard the term 'Welfare Dog,' you have also probably heard the terms 'hand
                        feeding' or 'not giving the food away free.' As we train our dogs, it is important to find
                        something they will work for; a toy, food, or good old-fashioned praise.
                    </p>",
                "is_feature" => '0',
                'button_text' => 'Continue Reading',

            ],
            [
                'title' => 'Obedience',
                'heading' => 'FOLLOW THROUGH',
                'description' => "<p> If we
                            ask our dog to sit, he doesn't, and we just give up or give him a treat anyway, we set a
                            standard for our training. Our dog will soon learn that he doesnt have to sit and he may
                            even get rewarded without doing anything. When we continue that command to it's conclusion,
                            your dog will quickly learn that he must execute the action to get his reward.</p>",
                'short_description' => " <p>
                        All throughout your life you may have heard the term 'follow through;' on your homework, on
                        a job, or on a promise. Well this phrase is especially important in dog training. Dogs are
                        just like we were as children. I have a teen and a toddler, so can be very relatable.
                    </p>",
                "is_feature" => '0',
                'button_text' => 'Continue Reading',

            ],
            [
                'title' => 'YOUR LIFE AFTER ADOPTING A SERVICE DOG',
                "sub_heading" => "ARTICLE",
                'heading' => 'FEATURED ARTICLE',
                'description' => " <h5>The Benefits of Service Dogs</h5>
                    <p>
                        The primary benefit of bringing a service dog into your life is to assist with everyday
                        tasks and improve your mobility. If you are bound to a wheelchair, for example, your dog
                        might help you pick up objects, open doors, or get into bed. The companionship and
                        friendship brought about by the relationship you have with your service dog can also reduce
                        stress and improve your mood.
                    </p>
                    <p>
                        Experts explain that different breeds have different capabilities as service dogs. Golden
                        retrievers and labradors are good choices for their size and dispositions, while cocker
                        spaniels and other small breeds make for good hearing dogs.
                    </p>
                    <h5>Preparing for Life With Your Service Dog</h5>
                    <p>
                        Adjusting to living with a service dog is relatively easy because they tend to be
                        well-trained and well-behaved, making them stress-free companions for people nervous about
                        adopting a pet. Keep in mind that if you do feel anxious about adopting a service dog, it is
                        important to manage that stress as much as possible. Dogs are highly sensitive to the stress
                        of the people around them, so lots of stress may lead to early behavioral issues. You can
                        alleviate stress by spending lots of time with them and giving them a safe space to relax.
                    </p>
                    <p>
                        While you will likely have a smooth experience adjusting to life with your service dog, it
                        is important to know that some unique preparations might be in order. In addition to the
                        typical pet supplies necessary for a dog owner, your dog may have specific needs.
                    </p>
                    <h5>Install a Fence to Create a Safe Outdoor Environment </h5>
                    <p>
                        Even service dogs need to spend some time outdoors every day, so you should make sure that
                        your home's yard is a safe place for pets. First and foremost, it is a good idea to contact
                        a local contractor if your property does not have a fence.
                    </p>
                    <p>
                        You can save some time and hassle by researching fence companies and reading online reviews
                        before meeting with a contractor. Be aware that installation costs will vary depending on
                        materials, size, and where the fence will be installed. When you find a suitable fence
                        installer, make sure they are licensed and insured before proceeding. As an added bonus,
                        installing a fence could help raise the equity in your home when it comes time to sell!
                    </p>
                    <h5>Long-Term Pet Care Considerations</h5>
                    <p>
                        After overcoming the initial hurdles of adopting a pet, the only long-term thing you need to
                        worry about is caring for your service dog. Some essentials to always keep on hand include
                        grooming supplies, safe toys, and a pet first-aid kit. Always make sure to check product
                        reviews from unbiased sources before buying pet products to ensure you don't expose your dog
                        to anything harmful.
                    </p>
                    <p>
                        Life after adopting a service dog is about much more than practicality. While you are
                        bringing an incredibly helpful animal into your home, you are also making a friend and
                        companion that can help you through the hardest of times and dramatically improve your
                        quality of life. Take steps to reduce stress at home, install a fence if you have a yard, a
                        only purchase quality supplies for your dog.
                    </p>",
                'short_description' => "<p data-aos='fade-up'>
                Service dogs can be wonderful companions for people with disabilities. The right service dog will
                help you live independently and lift your spirits. However, it is understandable that you might feel
                some anxiety about adopting a service dog, particularly if you are a first-time pet owner. By
                understanding some of the benefits and responsibilities you will receive along with your service
                dog, you will get a clear picture of what life might be like after welcoming your new pet into the
                household. Here’s some info to get you started, courtesy of Crystal Coast Canines.
            </p>",
                "written_by" => "Ed Carter",
                "is_feature" => '1',
                'button_text' => 'Read Article',
            ],
        ];
        $imageData = [
            'photo_1' => ['front/images/blog1.webp'],
            'photo_2' => ['front/images/blog2.webp'],
            'photo_3' => ['front/images/blog3.webp'],
            'photo_4' => ['front/images/article-img.webp'],
        ];

        foreach ($blogData as $index => $blogInfo) {
            // Create the blog entry
            $blog = Blog::create($blogInfo);

            // Attach multiple images to the blog using Spatie Media Library
            $imageKeys = 'photo_' . ($index + 1); // Adjust index for image data
            $imagePaths = $imageData[$imageKeys];
            foreach ($imagePaths as $imagePath) {
                $blog->addMedia(public_path($imagePath))->toMediaCollection('blog_img');
            }
        }
    }
}
