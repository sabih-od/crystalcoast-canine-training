@extends('front.layout.app')
<!-- HERO MAIN SECTION -->
@section('content')
    <section class="mainSlider">
        <div class="swiper-container homeSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner bg-image">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-12">
                                    <div class="slideContent slideOne">
                                        <h2>CRYSTAL COAST</h2>
                                        <h3><span>CANINE TRAINING</span></h3>

                                        <p>“Be the most interesting human your dog has ever met.“</p>
                                        <h5>Ralf Weber</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner bg-image">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-12">
                                    <div class="slideContent slideOne">
                                        <h2>CRYSTAL COAST CANINE </h2>
                                        <h3><span>TRAINING</span></h3>

                                        <p>“Be the most interesting human your dog has ever met.“</p>
                                        <h5>Ralf Weber</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner bg-image">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-12">
                                    <div class="slideContent slideOne">
                                        <h2>CRYSTAL COAST CANINE </h2>
                                        <h3><span>TRAINING</span></h3>

                                        <p>“Be the most interesting human your dog has ever met.“</p>
                                        <h5>Ralf Weber</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutsection">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="aboutwrap">
                        <figure>
                            <img src="{{ asset('front/images/about1.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="aboutcntnt">
                        <h4>Hello</h4>
                        <h3>EXPERT DOG TRAINING</h3>
                        <p>Welcome to CRYSTAL COAST CANINE TRAINING LLC! We are dedicated to providing effective and
                            personalized dog training services to help you and your furry friend bond and live happily
                            ever after. Contact us today to schedule a consultation and take the first step towards a
                            well-behaved dog.</p>
                        <a href="{{ route('front.about') }}" class="themeBtn">Find Out More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="experienceSec">
        <div class="container">
            <h2 class="mainHead text-center pb-4" data-aos="fade-up">are you experiencing these behaviors?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="expWrap" data-aos="fade-up">
                        <img src="{{ asset('front/images/gall1.webp') }}" class="img-fluid" alt="">
                        <h3>Aggression</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expWrap" data-aos="fade-up">
                        <img src="{{ asset('front/images/gall2.webp') }}" class="img-fluid" alt="">
                        <h3>Jumping on you or guests</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expWrap" data-aos="fade-up">
                        <img src="{{ asset('front/images/gall3.webp') }}" class="img-fluid" alt="">
                        <h3>Excessive barking</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expWrap" data-aos="fade-up">
                        <img src="{{ asset('front/images/gall4.webp') }}" class="img-fluid" alt="">
                        <h3>Pulling on the leash</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expWrap" data-aos="fade-up">
                        <img src="{{ asset('front/images/gall5.webp') }}" class="img-fluid" alt="">
                        <h3>Counter surfing</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expWrap" data-aos="fade-up">
                        <img src="{{ asset('front/images/gall6.webp') }}" class="img-fluid" alt="">
                        <h3>Anxiety</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expWrap" data-aos="fade-up">
                        <img src="{{ asset('front/images/gall10.webp') }}" class="img-fluid" alt="">
                        <h3>Reactivity</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expWrap" data-aos="fade-up">
                        <img src="{{ asset('front/images/gall11.webp') }}" class="img-fluid" alt="">
                        <h3>Biting</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expWrap" data-aos="fade-up">
                        <img src="{{ asset('front/images/gall12.webp') }}" class="img-fluid" alt="">
                        <h3>Rough play</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expWrap" data-aos="fade-up">
                        <img src="{{ asset('front/images/gall13.webp') }}" class="img-fluid" alt="">
                        <h3>Poor manners</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="expWrap" data-aos="fade-up">
                        <img src="{{ asset('front/images/gall14.webp') }}" class="img-fluid" alt="">
                        <h3>Stubborn behavior</h3>
                    </div>
                </div>
                <div class="col-md-12 text-center" data-aos="fade-up">
                    <a href="" class="themeBtn">View All Issues</a>
                </div>
            </div>
        </div>
    </section>

    <section class="scheduleSec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="scheduleContnt" data-aos="fade-up">
                        <h2>Schedule an in-person evaluation TODAY</h2>
                        <a href="#" class="themeBtn" data-toggle="modal"
                            data-target="#exampleModalCenter">SCHEDULE
                            EVALUATION</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trainingSec">
        <div class="container">
            <div class="abthead text-center">
                <h2 class="mainHead mb-5" data-aos="fade-up">YOUR ONE STOP SHOP FOR <br> DOG TRAINING</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="aboutwrap">
                        <figure>
                            <img src="{{ asset('front/images/train1.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="aboutcntnt">
                        <h3>Basic Obedience</h3>
                        <p>Teach your dog basic commands like sit, stay, come, off, no, and heel with our obedience
                            training programs. Our expert trainers use balanced training techniques to make learning
                            interactive for your dog.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-7" data-aos="fade-left">
                    <div class="aboutwrap ">
                        <figure>
                            <img src="{{ asset('front/images/train2.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-5" data-aos="fade-right">
                    <div class="aboutcntnt abutleft">
                        <h3>Advanced Obedience</h3>
                        <p>Take your dog's obedience skills to the next level with our advanced obedience training
                            programs. Our trainers can teach your dog more complex commands and behaviors, such as
                            off-leash training and recall.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="aboutwrap">
                        <figure>
                            <img src="{{ asset('front/images/train3.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="aboutcntnt">
                        <h3>Behavior Modification</h3>
                        <p>Does your dog have problem behaviors like jumping, barking, or digging? Our behavior
                            modification programs can help address these issues and teach your dog more appropriate
                            behaviors.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="lawSec">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="lawCard" data-aos="fade-up">
                        <figure>
                            <img src="{{ asset('front/images/law1.webp') }}" class="img-fluid" alt="">
                        </figure>
                        <div class="lawText">
                            <h2 class="mainHead text-white">Military/Law <br> Enforcement</h2>
                            <div class="discoundCard">
                                <h4><span>Discount</span>15%</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="lawCard" data-aos="fade-up">
                        <figure>
                            <img src="{{ asset('front/images/law2.webp') }}" class="img-fluid" alt="">
                        </figure>
                        <div class="lawText">
                            <h2 class="mainHead text-white">Multiple Dog</h2>
                            <div class="discoundCard">
                                <h4><span>Discount</span>20%</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customerSec">
        <div class="container">
            <div class="abthead text-center mb-5">
                <h3 class="subHead" data-aos="fade-up">Testimonials</h3>
                <h2 class="mainHead" data-aos="fade-up">What Client’s Say About US</h2>
            </div>
            <div class="row">
                <div class="swiper customerSlider" data-aos="fade-up">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="review-card">
                                <div class="review-card--body">
                                    <img src="{{ asset('front/images/icon-quote-up.webp') }}"
                                        class="img-fluid icon-quote1" alt="">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>
                                        Elizabeth is very professional and did a great job communicating to us how Piper
                                        was doing through text, pictures and videos. We would recommend her for anyone
                                        interested in needing to train their dog
                                    </p>
                                    <img src="{{ asset('front/images/icon-quote-down.webp') }}"
                                        class="img-fluid icon-quote2" alt="">
                                </div>
                                <div class="review-card--footer">
                                    <figure>
                                        <img src="{{ asset('front/images/user11.webp') }}" alt=""
                                            class="img-fluid">
                                        <h3>Steven<span>9/6/2023</span></h3>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-card">
                                <div class="review-card--body">
                                    <img src="{{ asset('front/images/icon-quote-up.webp') }}"
                                        class="img-fluid icon-quote1" alt="">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>
                                        Elizabeth provided personalized attention, tailoring the sessions to suit my
                                        puppy's specific needs and temperament. Her expertise and patience have made the
                                        process enjoyable for both me and my pup.
                                    </p>
                                    <img src="{{ asset('front/images/icon-quote-down.webp') }}"
                                        class="img-fluid icon-quote2" alt="">
                                </div>
                                <div class="review-card--footer">
                                    <figure>
                                        <img src="{{ asset('front/images/user22.webp') }}" alt=""
                                            class="img-fluid">
                                        <h3>Kelly<span>3/25/2024</span></h3>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-card">
                                <div class="review-card--body">
                                    <img src="{{ asset('front/images/icon-quote-up.webp') }}"
                                        class="img-fluid icon-quote1" alt="">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>
                                        Just picked up our new puppy, so far she’s been amazing. We started working with
                                        her yesterday on our drive back up north and she’s already responding to her
                                        name. Can’t wait to see this little girl
                                    </p>
                                    <img src="{{ asset('front/images/icon-quote-down.webp') }}"
                                        class="img-fluid icon-quote2" alt="">
                                </div>
                                <div class="review-card--footer">
                                    <figure>
                                        <img src="{{ asset('front/images/user3.webp') }}" alt=""
                                            class="img-fluid">
                                        <h3>Antonio<span>6/15/2022</span></h3>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-card">
                                <div class="review-card--body">
                                    <img src="{{ asset('front/images/icon-quote-up.webp') }}"
                                        class="img-fluid icon-quote1" alt="">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>
                                        One week down with our big boy. I have been working with (Moke). We're are still
                                        getting used to our new surroundings and potty training. He walks on a leash
                                        like a pro and knows how to sit. Can't wai
                                    </p>
                                    <img src="{{ asset('front/images/icon-quote-down.webp') }}"
                                        class="img-fluid icon-quote2" alt="">
                                </div>
                                <div class="review-card--footer">
                                    <figure>
                                        <img src="{{ asset('front/images/user4.webp') }}" alt=""
                                            class="img-fluid">
                                        <h3>TJ<span>6/17/2022</span></h3>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-card">
                                <div class="review-card--body">
                                    <img src="{{ asset('front/images/icon-quote-up.webp') }}"
                                        class="img-fluid icon-quote1" alt="">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>
                                        From the time communication started I could tell the joy for the animals and
                                        work. Calm demeanor and great at helping keep situations comfortable. Enjoy the
                                        continuous talks and working with schedules
                                    </p>
                                    <img src="{{ asset('front/images/icon-quote-down.webp') }}"
                                        class="img-fluid icon-quote2" alt="">
                                </div>
                                <div class="review-card--footer">
                                    <figure>
                                        <img src="{{ asset('front/images/user5.webp') }}" alt=""
                                            class="img-fluid">
                                        <h3>Rikki<span>4/12/2024</span></h3>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="trainingOptions">
        <div class="container">
            <div class="abthead text-center mb-4">
                <h2 class="mainHead" data-aos="fade-up">TRAINING OPTIONS</h2>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="blog--card">
                        <figure><img src="{{ asset('front/images/option1.webp') }}" class="w-100" alt="img">
                        </figure>
                        <div class="blog--content">
                            <h2>Board and Train</h2>
                            <p>Our Board and Train program offers a hassle free way for your dog to receive training
                                when you simply lack the time or need a few issues addressed.</p>
                            <a href=" {{ route('front.board') }}" class="themeBtn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                    <div class="blog--card">
                        <figure><img src="{{ asset('front/images/option2.webp') }}" class="w-100" alt="img">
                        </figure>
                        <div class="blog--content">
                            <h2>Private Lessons</h2>
                            <p>Private lessons are a one on one atmosphere. This allows for the dog, trainer, and owner
                                to have a distraction free environment in which to train and learn.</p>
                            <a href=" {{ route('front.private') }}" class="themeBtn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                    <div class="blog--card">
                        <figure><img src="{{ asset('front/images/option3.webp') }}" class="w-100" alt="img">
                        </figure>
                        <div class="blog--content">
                            <h2>group training</h2>
                            <p>Group Classes can be very beneficial. They offer a controlled environment for
                                socialization for you and your dog and create a level of distraction that your pup can
                                learn to be comfortable in.</p>
                            <a href="{{ route('front.group') }} " class="themeBtn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                    <div class="blog--card">
                        <figure><img src="{{ asset('front/images/sumertraining1.jpg') }}" class="w-100" alt="img">
                        </figure>
                        <div class="blog--content">
                            <h2>Summer mini sessions</h2>
                            <p>On vacation and bringing your pup?
                                Don't leave them at home or in the rental! Bring them to Summer Day Training with our
                                expert trainers. </p>
                            <a href=" {{ route('front.summer') }}" class="themeBtn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="person--main">
        <div class="container-fluid p-0">
            <div class="row align-items-center justify-content-end">
                <div class="col-md-5" data-aos="fade-right">
                    <div class="person--content">
                        <h4 class="subHead">Don’t know where to begin?</h4>
                        <h2 class="mainHead">IN-PERSON EVALUATIONS</h2>
                        <p>Understanding what’s going on with your pup can be a tough battle. With our in-person
                            evaluations, our trainers have the ability to meet your dog and recommend the right training
                            program for you and your best friend.</p>
                        <a href="#" class="themeBtn" data-toggle="modal" data-target="#exampleModalCenter">Book
                            Evaluation</a>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <figure>
                        <img src=" {{ asset('front/images/personimg.webp') }}" class="img-fluid w-100" alt="img">
                    </figure>
                </div>
            </div>
        </div>
    </section>
@endsection
