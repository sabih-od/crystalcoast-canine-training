@extends('front.layout.app')
<!-- HERO MAIN SECTION -->

@section('content')
    <section class="mainSlider">
        <div class="swiper-container homeSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner bg-image" data-background="{{ $page->cmsImages('background_banner_image') }}">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-12">
                                    <div class="slideContent slideOne">
                                        <h2>{{ $page->content['banner_heading'] ?? '' }}</h2>
                                        <h3><span>{{ $page->content['banner_heading1'] ?? '' }}</span></h3>

                                        <p>{{ $page->content['banner_para'] ?? '' }}</p>
                                        <h5>{{ $page->content['banner_heading2'] ?? '' }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="swiper-slide">
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
                </div> --}}
            </div>
        </div>
    </section>

    <section class="aboutsection">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="aboutwrap">
                        <figure>
                            <img src="{{ $page->cmsImages('st_image') ?? '' }}" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="aboutcntnt">
                        <h4>{{ $page->content['st_title'] ?? '' }}</h4>
                        <h3>{{ $page->content['st_heading'] ?? '' }}</h3>
                        <p>{{ $page->content['st_des'] ?? '' }}</p>
                        <a href="{{ route('front.about') }}" class="themeBtn">{{ $page->content['st_btn'] ?? '' }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="experienceSec">
        <div class="container">
            <h2 class="mainHead text-center pb-4" data-aos="fade-up">are you experiencing these behaviors?</h2>
            <div class="row">
                @foreach ($behaviors as $item)
                    <div class="col-md-4">
                        <div class="expWrap" data-aos="fade-up">
                            <img src="{{ $item->behaviorImage('behavior_image') }}" class="img-fluid" alt="">
                            <h3>{{ $item->title }}</h3>
                        </div>
                    </div>
                @endforeach
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
                        <h2>{{ $page->content['sch_heading'] ?? '' }}</h2>
                        <a href="#" class="themeBtn" data-toggle="modal"
                            data-target="#exampleModalCenter">{{ $page->content['sch_btn'] ?? '' }}</a>
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
            @foreach ($trainings as $index => $training)
                <div class="row align-items-center {{ $index % 2 == 1 ? 'flex-row-reverse' : '' }}">
                    <div class="col-md-{{ $index % 2 == 1 ? '7' : '6' }}"
                        data-aos="{{ $index % 2 == 1 ? 'fade-left' : 'fade-right' }}">
                        <div class="aboutwrap">
                            <figure>
                                <img src="{{ $training->trainingImage('training_image') }}" class="img-fluid"
                                    alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-{{ $index % 2 == 1 ? '5' : '6' }}"
                        data-aos="{{ $index % 2 == 1 ? 'fade-right' : 'fade-left' }}">
                        <div class="aboutcntnt {{ $index % 2 == 1 ? 'abutleft' : '' }}">
                            <h3>{{ $training->title }}</h3>
                            <p>{{ $training->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </section>

    <section class="lawSec">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="lawCard" data-aos="fade-up">
                        <figure>
                            <img src="{{ $page->cmsImages('dic_img_1') ?? '' }}" class="img-fluid" alt="">
                        </figure>
                        <div class="lawText">
                            <h2 class="mainHead text-white">{{ $page->content['dis_heading'] ?? '' }}</h2>
                            <div class="discoundCard">
                                <h4><span>{{ $page->content['dis_cir_heading'] ?? '' }}</span>{{ $page->content['dis_cir_per'] ?? '' }}
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="lawCard" data-aos="fade-up">
                        <figure>
                            <img src="{{ $page->cmsImages('dic_img_2') ?? '' }}" class="img-fluid" alt="">
                        </figure>
                        <div class="lawText">
                            <h2 class="mainHead text-white">{{ $page->content['dis_heading_1'] ?? '' }}</h2>
                            <div class="discoundCard">
                                <h4><span>{{ $page->content['dis_cir_heading_1'] ?? '' }}</span>{{ $page->content['dis_cir_per_1'] }}
                                </h4>
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
                @foreach ($products as $item)
                    
                <div class="col-md-4" data-aos="fade-up">
                    <div class="blog--card">
                        <figure><img src="{{ asset('front/images/option1.webp') }}" class="w-100" alt="img">
                        </figure>
                        <div class="blog--content">
                            <h2>{{ $item->title }}</h2>
                            <p>Our Board and Train program offers a hassle free way for your dog to receive training
                                when you simply lack the time or need a few issues addressed.</p>
                                <a href=" {{ route('front.trainingCategory', ['productCategory' => $item->id]) }}" class="themeBtn">Learn More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                {{-- <div class="col-md-4" data-aos="fade-up">
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
                </div> --}}
            </div>
        </div>
    </section>

    <section class="person--main">
        <div class="container-fluid p-0">
            <div class="row align-items-center justify-content-end">
                <div class="col-md-5" data-aos="fade-right">
                    <div class="person--content">
                        <h4 class="subHead">{{ $page->content['evo_title'] ?? '' }}</h4>
                        <h2 class="mainHead">{{ $page->content['evo_heading'] ?? '' }}</h2>
                        <p>{{ $page->content['evo_discreption'] ?? '' }}</p>
                        <a href="#" class="themeBtn" data-toggle="modal"
                            data-target="#exampleModalCenter">{{ $page->content['evo_btn'] ?? '' }}</a>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <figure>
                        <img src=" {{ $page->cmsImages('evo_img') ?? '' }}" class="img-fluid w-100" alt="img">
                    </figure>
                </div>
            </div>
        </div>
    </section>
@endsection
