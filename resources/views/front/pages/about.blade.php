@extends('front.layout.app')
@section('content')
    {{-- {{ $data->content['banner_title'] ?? '' }} --}}
    {{-- {{ $data->cmsImages('story_image') ?? '' }} --}}
    <!-- Begin: Main Slider -->
    <div class="innerBan">
        <img src="{{ $page->cmsImages('background_banner_image') ?? '' }}" class="w-100" alt="">
        <div class="overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h2>{{ $page->content['about_banner_title'] ?? '' }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Main Slider -->

    <section class="location" data-aos="fade-up">
        <div class="container">
            <div class="location__content">
                <h2 class="mainHead">{{ $page->content['about_loc_heading'] ?? '' }}</h2>
                <h4 class="subHead">{{ $page->content['about_loc_address'] ?? '' }}</h4>
                <p>
                    {{ $page->content['about_loc_address_com'] ?? '' }}
                </p>
            </div>
        </div>
    </section>

    <section class="aboutsection aboutInner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="aboutwrap">
                        <figure>
                            <img src="{{ $page->cmsImages('about_sec_story_img_1') ?? '' }}" class="img-fluid"
                                alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="aboutcntnt">
                        <h4>{{ $page->content['about_sec_title1'] ?? '' }}</h4>
                        <h3>{{ $page->content['about_sec_head1'] ?? '' }}</h3>
                        <p>{{ $page->content['about_sec_des1'] ?? '' }}</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutInner aboutsection-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="aboutcntnt bg-transparent p-0 m-0">
                        <h4>{{ $page->content['about_sec_heading_2'] ?? '' }}</h4>
                        <p>
                            {{ $page->content['about_sec_des_2'] ?? '' }}  </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <figure class="about-innerImg">
                        <img src="{{ $page->cmsImages('about_sec_story_img_2') ?? '' }}" alt="image" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="row align-items-center flex-row-reverse mt-5">
                <div class="col-md-6">
                    <div class="aboutcntnt bg-transparent p-0 m-0">
                        {!! $page->content['about_sec_desc_3'] ?? '' !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <figure class="about-innerImg">
                        <img src="{{ $page->cmsImages('about_sec_story_img_3') ?? '' }}" alt="image" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="discount">
        <div class="container">
            <div class="abthead text-center mb-5">
                <h2 class="mainHead" data-aos="fade-up">{{ $page->content['about_sec_des_title'] ?? '' }}</h2>
            </div>
            <div class="swiper discountSlider" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="discount-card">
                            <figure class="discount-card__img">
                                <img src="{{ $page->cmsImages('about_sec_des_img_1') ?? '' }}" alt="image" class="img-fluid">
                            </figure>
                            <h5 class="percent">   {{ $page->content['about_sec_des_off1'] ?? '' }}</h5>
                            <h4 class="title">{{ $page->content['about_sec_des_head_1'] ?? '' }}</h4>
                            <p>
                                {{ $page->content['about_sec_des_des_1'] ?? '' }}
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="discount-card">
                            <figure class="discount-card__img">
                                <img src="{{ $page->cmsImages('about_sec_des_img_2') ?? '' }}" alt="image" class="img-fluid">
                            </figure>
                            <h5 class="percent">{{ $page->content['about_sec_des_off2'] ?? '' }}</h5>
                            <h4 class="title">
                                {{ $page->content['about_sec_des_head2'] ?? '' }}
                            </h4>
                            <p>
                                {{ $page->content['about_sec_des_des2'] ?? '' }}
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="discount-card">
                            <figure class="discount-card__img">
                                <img src="{{ $page->cmsImages('about_sec_des_img_3') ?? '' }}" alt="image" class="img-fluid">
                            </figure>
                            <h5 class="percent"> {{ $page->content['about_sec_des_off3'] ?? '' }}</h5>
                            <h4 class="title"> {{ $page->content['about_sec_des_head3'] ?? '' }}</h4>
                            <p>
                                {{ $page->content['about_sec_des_desc3'] ?? '' }}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="discountSlider-pagination swiper-pagination"></div> -->
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
                                    <img src="{{ asset('front/images/icon-quote-up.webp') }}" class="img-fluid icon-quote1"
                                        alt="">
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

    <section class="socialIcons" data-aos="fade-up">
        <div class="container">
            <h2 class="mainHead text-center">  {{ $page->content['about_sec_soc_head'] ?? '' }}</h2>
            <ul class="socialIcons__list">
                <li><a href="{{ $settings->social_link_1 ?? '' }}" target="_blank"><img
                            src="{{ $page->cmsImages('about_sec_soc_img_1') ?? '' }}" alt="image" class="img-fluid"></a></li>
                <li><a href="{{ $settings->social_link_2 ?? '' }}" target="_blank"><img
                            src="{{ $page->cmsImages('about_sec_soc_img_2') ?? '' }}" alt="image" class="img-fluid"></a></li>
                <li><a href="{{ $settings->social_link_3 ?? '' }}" target="_blank"><i
                            class="fab fa-yelp"></i></a></li>
            </ul>
        </div>
    </section>

    <section class="person--main">
        <div class="row align-items-center justify-content-end">
            <div class="col-md-5" data-aos="fade-right">
                <div class="person--content">
                    <h2 class="mainHead">{{ $page->content['about_sec_help_head'] ?? '' }}</h2>
                    <p>
                        {{ $page->content['about_sec_help_des'] ?? '' }}
                    </p>
                    <a href="https://www.paypal.com/donate?token=_1xSFcdWXVLJhROYbAO8RKQwWyJEfSfEpsrTIyxWiG_Tn4PA-1QNh5zmphnEq56UyvFxbz95XeWtx2lZ"
                        target="_blank" class="themeBtn">{{ $page->content['about_sec_help_btn'] ?? '' }}</a>
                    <figure>
                        <img src="{{ asset('front/images/payment.webp') }}" alt="image" class="img-fluid mt-3">
                    </figure>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <figure>
                    <img src="{{ $page->cmsImages('about_sec_hepl_img_1') ?? '' }}" class="img-fluid w-100" alt="img">
                </figure>
            </div>
        </div>
    </section>
@endsection
