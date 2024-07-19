@extends('front.layout.app')
@section('content')

    <!-- Begin: Main Slider -->
    <div class="innerBan">
        <img src="front/images/innerbnr1.webp" class="w-100" alt="">
        <div class="overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h2>Private Lessons</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Main Slider -->

    <section class="trainInner">
        <div class="container-fluid p-0">
            <div class="row flex-row-reverse align-items-center">
                <div class="col-md-6">
                    <figure>
                        <img src="front/images/img2.webp" class="img-fluid" alt="">
                    </figure>
                </div>
                <div class="col-md-6">
                    <div class="trainText ml-0">
                        <p>Private lessons offer a one-on-one atmosphere for you and your pup to work with a trainer in
                            a controlled environment. Lessons may take place in your home, at a park, or at a
                            dog-friendly establishment. You and your dog will meet with a trainer once a week. Our
                            trainer will teach you and your pup commands and work with behavior. </p>
                        <p>Between lessons, you will need to work with your dog on what was learned during the lesson.
                            This type of training will only be productive if you and your dog do the homework.</p>
                        <p>If there are any behavioral issues that arise during training, the trainer will discuss what
                            is happening and provide advice on solutions. </p>
                        <p>Age requirement for private lessons is 12 weeks old.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricingSect">
        <div class="container">
            <h2 class="mainHead text-center">Our Pricing</h2>
            <p class="begavioralPara mb-2">Dogs ages 12 weeks and older will meet once a week</p>
            <h3 class="heading-sm text-center mb-5">Specialty</h3>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="pricingBox" onClick="window.location = '{{ route('front.cart') }}' ">
                        <h3>Remediation</h3>
                        <a href="#"><span>$80</span>(Per Lesson)</a>
                        <p>This course focuses on leash walking, going out in public, sit, and down. It is designed to
                            give your pup an expedited training experience that helps them go to the beach, outdoor
                            restaurants/ breweries, and the park while be well behaved.</p>
                        <p>This course is not suitable for dogs with reactivity or high anxiety. An evaluation is not
                            required, however if your dog shows signs of reactivity or high anxiety, we will recommend
                            an alternate course.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pricingBox" onClick="window.location = '{{ route('front.cart') }}' ">
                        <h3>Puppy Training</h3>
                        <a href="#"><span>$640</span>(8 Lessons)</a>
                        <p>Basic Commands, Leash Walking, Socialization with people and dogs, Beach Walks, and Public
                            Exposure</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricingSect obedienceSect">
        <div class="container">
            <h2 class="mainHead text-center mb-4">Obedience</h2>
            <!-- <p class="begavioralPara">Dogs ages 12 weeks and older will meet once a week</p> -->
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="pricingBox" onClick="window.location = '{{ route('front.cart') }}' ">
                        <h3>Manners</h3>
                        <a href="#"><span>$480</span>(4 Lessons)</a>
                        <p>This course focuses on leash walking, going out in public, sit, and down. It is designed to
                            give your pup an expedited training experience that helps them go to the beach, outdoor
                            restaurants/ breweries, and the park while be well behaved.</p>
                        <p>This course is not suitable for dogs with reactivity or high anxiety. An evaluation is not
                            required, however if your dog shows signs of reactivity or high anxiety, we will recommend
                            an alternate course.</p>
                        <!-- <a href="#" class="themeBtn" data-toggle="modal" data-target="#exampleModalCenter">SCHEDULE
                            EVALUATION</a> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pricingBox" onClick="window.location = '{{ route('front.cart') }}' ">
                        <h3>Basic</h3>
                        <a href="#"><span>$800</span>(8 Lessons)</a>
                        <p>Basic Commands, Leash Walking, Socialization with people and dogs, Beach Walks, and Public
                            Exposure</p>
                        <!-- <a href="#" class="themeBtn" data-toggle="modal" data-target="#exampleModalCenter">SCHEDULE
                            EVALUATION</a> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pricingBox" onClick="window.location = '{{ route('front.cart') }}' ">
                        <h3>Advanced</h3>
                        <a href="#"><span>$1200</span>(12 Lessons)</a>
                        <p>Basic Commands with duration and precision in Public and with Distractions, Socialization,
                            skills work around other dogs, and Off Leash Obedience</p>
                        <!-- <a href="#" class="themeBtn" data-toggle="modal" data-target="#exampleModalCenter">SCHEDULE
                            EVALUATION</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricingSect obedienceSect">
        <div class="container">
            <h2 class="mainHead text-center">Behavioral</h2>
            <p class="begavioralPara">Dogs ages 12 weeks and older will meet once a week</p>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="pricingBox" onClick="window.location = '{{ route('front.cart') }}' ">
                        <h3>Mild-Moderate</h3>
                        <a href="#"><span>$1200</span>(8 Lessons)</a>
                        <p>Issues such as leash pulling, jumping on you or a guest, barking, or becoming overly excited
                            with walks and or guests</p>
                        <!-- <a href="#" class="themeBtn" data-toggle="modal" data-target="#exampleModalCenter">SCHEDULE
                            EVALUATION</a> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pricingBox" onClick="window.location = '{{ route('front.cart') }}' ">
                        <h3>Moderate-Extreme</h3>
                        <a href="#"><span>$1800</span>(12 Lessons)</a>
                        <p>Issues such as aggression or anxiety causing fear or aggression</p>
                        <!-- <a href="#" class="themeBtn" data-toggle="modal" data-target="#exampleModalCenter">SCHEDULE
                            EVALUATION</a> -->
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="pricingBar">
                        <p>Prices are based on an hourly rate which includes training and support throughout the course
                            and your lifetime.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="scheduleSec scheduleSec-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="scheduleContnt" data-aos="fade-up">
                        <h2>Schedule an in-person evaluation TODAY</h2>
                        <a href="#" class="themeBtn" data-toggle="modal" data-target="#exampleModalCenter">SCHEDULE
                            EVALUATION</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
