@extends('front.layout.app')
@section('content')
    <!-- Begin: Main Slider -->
    <div class="innerBan">
        <img src="front/images/innerbnr1.webp" class="w-100" alt="">
        <div class="overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h2>Summer mini sessions</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Main Slider -->

    <section class="aboutInner summer-page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="aboutwrap">
                        <figure>
                            <img src="front/images/sumertraining1.jpg" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="aboutcntnt">
                        <h2>Training Description</h2>
                        <p>On vacation and bringing your pup? <br>
                            Don't leave them at home or in the rental! Bring them to Summer Day Training with our expert
                            trainers.</p>
                        <p>We will teach your pal basic manners, obedience, and work on socialization and exposure while
                            you hang at the beach. By the time you are ready to scout out new shops and grab ice cream,
                            your dog will be ready to join.</p>
                        <p>During the day we will greet your dog to others, expose them to public environments they may
                            not be used to, teach them how to walk nicely through a store or shop, and introduce them to
                            the beach and waves.</p>
                        <p>Let us take the stress of your dog's poor manners or nervousness away while you relax and
                            enjoy each day in the sun.</p>
                        <p>This course is designed for dogs 12 weeks and older. He or she will work with us during the
                            day and be picked up and you will receive a lesson covering what was learned that day in the
                            afternoon.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="blog-card">
                        <img src="front/images/summer1.jpg" alt="image" class="img-fluid">
                        <div class="summerpg-card">
                            <h4 class="title">Customized Training Programs</h4>
                            <p>We understand that every dog is unique, which is why we offer customized training
                                programs
                                that are tailored to meet the specific needs of each dog and their owner. Our trainers
                                work
                                closely with you to identify the areas that need improvement and develop a training plan
                                that is effective and enjoyable for both you and your dog.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-card">
                        <img src="front/images/summer2.jpg" alt="image" class="img-fluid">
                        <div class="sumer-customize">
                            <div class="summerpg-card">
                                <h4 class="title">Certified and
                                    Experienced Trainers</h4>
                                <p>Our trainers are certified and have years of experience working with dogs of all
                                    breeds
                                    and
                                    ages. They are passionate about helping dogs reach their full potential and work
                                    tirelessly
                                    to ensure that every dog receives the best possible care and attention.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pricingSect summerpg-pricing">
        <div class="container">
            <h2 class="mainHead text-center">OPTIONS AND PRICING</h2>
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="pricingBox" onclick="window.location = '{{ route('front.cart') }}' ">
                                <h3>2 Day</h3>
                                <a href="javascript:void(0)"><span>$300</span></a>
                                <p>Take your dog for a walk on the beach and walk around the local shops with our 2 day
                                    exposure. These sessions cover leash walking and</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pricingBox" onclick="window.location = '{{ route('front.cart') }}' ">
                                <h3>4 Day</h3>
                                <a href="javascript:void(0)"><span>$560</span></a>
                                <p>Go to the brewery and ice cream shop with your friends and family while your pup tags
                                    along.
                                    These sessions cover leash walking, sit and down in public, and </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pricingBox" onclick="window.location = '{{ route('front.cart') }}' ">
                                <h3>6 Day</h3>
                                <a href="javascript:void(0)"><span>$780</span></a>
                                <p>These sessions will focus on leash manners, manners in public, and obedience. This
                                    program is
                                    suitable for taking your dog out and about shopping, eating at an outdoor seating
                                    restaurant, or simply exploring town while being able to bring your best friend
                                    along.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection