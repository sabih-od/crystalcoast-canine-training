@extends('front.layout.app')
@section('content')
    <!-- Begin: Main Slider -->
    <div class="innerBan">
        <img src="{{ asset('front/images/innerbnr1.webp') }}" class="w-100" alt="">
        <div class="overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Main Slider -->

    <section class="location" data-aos="fade-up">
        <div class="container">
            <div class="location__content">
                <h2 class="mainHead">located in</h2>
                <h4 class="subHead">Surf city, north carolina</h4>
                <p>Servicing Pender, New Hanover, Onslow, Jones, Craven, and Carteret Counties</p>
            </div>
        </div>
    </section>

    <section class="aboutsection aboutInner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="aboutwrap">
                        <figure>
                            <img src="{{ asset('front/images/about-inner1.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="aboutcntnt">
                        <h4>Owner/ Head Trainer</h4>
                        <h3>Elizabeth</h3>
                        <p>
                            Elizabeth is the owner of Crystal Coast Canine Training, LLC. She served in the U.S. Marine
                            Corps and fell in love with Malinois and Dutch Shepherd. After having three Mals and a Dutch
                            Shepherd she became passionate about training and breeding dogs to become high-functioning
                            members of society.  She has worked with dogs for several years and continues to learn and
                            grow.
                        </p>
                        <p>
                            She believes that the most important aspect of dog training is communication. Over the years
                            she has been to numerous training seminars and courses and conducted extensive research
                            through multiple avenues to become the best balanced trainer she can be. She has learned
                            many different approaches to training from some of the brightest minds in dog training and
                            believes that not all dogs learn the same way. This belief has encouraged her to have a
                            continuously evolving training program tailored to each and every dog
                        </p>
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
                        <h4>How We Train Our Dogs</h4>
                        <p>
                            Each dog comes from a different background.  Breed and age play an important role in how
                            your dog will learn. Where one dog may excel, another may struggle. This is why we conduct
                            in-person evaluations for each client prior to drop off. We ask specific questions about
                            your dog and their environment. If you have children, we may conduct more training around
                            young individuals, whereas, if you do not and you frequent sporting events, training may be
                            focussed around that setting. When we first meet, it is important to share all pertinent
                            information, so we may provide the best customized training for your dog.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <figure class="about-innerImg">
                        <img src="{{ asset('front/images/about-inner2.webp') }}" alt="image" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="row align-items-center flex-row-reverse mt-5">
                <div class="col-md-6">
                    <div class="aboutcntnt bg-transparent p-0 m-0">
                        <h3>Breeding</h3>
                        <h4>How We Raise Our Puppies</h4>
                        <p>
                            All of our dogs are raised in a healthy and loving atmosphere. Each is worked and played
                            with daily and fed high-quality food. We have a young teen and a toddler so every puppy
                            grows up with children and is exposed to different animals and sounds. At the age of two
                            weeks, (once they're standing and have open eyes) the pups are litter box trained and
                            exposed to nervous system training.
                        </p>
                        <h4>
                            Our Process
                        </h4>
                        <p>
                            Once each puppy turns one month old they are introduced to different training environments.
                            Simply put, we will begin placing them in situations they will encounter once they go to
                            their new homes. Car rides, loud noises, bathing, potty training, leash walking, and meal
                            time manners. When you take your pup home we want it to be the least stressful experience
                            possible.
                        </p>
                        <h4>What We Feed Our Pups</h4>
                        <p>
                            From the age of 3 weeks to 6 months we feed Purina Pro Plan Puppy Under 1 Year. This
                            provides the needed nutrients for a growing puppy. This is a higher Protein food for active
                            breeds like Dutch Shepherd and Belgian Malinois.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <figure class="about-innerImg">
                        <img src="{{ asset('front/images/about-inner3.webp') }}" alt="image" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="discount">
        <div class="container">
            <div class="abthead text-center mb-5">
                <h2 class="mainHead" data-aos="fade-up">discounts</h2>
            </div>
            <div class="swiper discountSlider" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="discount-card">
                            <figure class="discount-card__img">
                                <img src="{{ asset('front/images/discount-img2.webp') }}" alt="image" class="img-fluid">
                            </figure>
                            <h5 class="percent">20%</h5>
                            <h4 class="title">For Multiple dogs</h4>
                            <p>
                                This discount may be applied when any client has multiple dogs living in the same home.
                                For each additional dog after the first, there will be a 20% discount applied. This
                                discount may be applied to any training package.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="discount-card">
                            <figure class="discount-card__img">
                                <img src="{{ asset('front/images/discount-img1.webp') }}" alt="image" class="img-fluid">
                            </figure>
                            <h5 class="percent">15%</h5>
                            <h4 class="title">to active duty military, veterans, law enforcement, and first responders
                            </h4>
                            <p>
                                This discount may be applied to any puppy sale or training. Proof of service or
                                employment must be provided for a discount to be applied.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="discount-card">
                            <figure class="discount-card__img">
                                <img src="{{ asset('front/images/blog2.webp') }}" alt="image" class="img-fluid">
                            </figure>
                            <h5 class="percent">10%</h5>
                            <h4 class="title">to seniors over 60 years old</h4>
                            <p>
                                This discount may be applied to any training package.
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
                                    <img src="{{ asset('front/images/icon-quote-down.webp') }}" class="img-fluid icon-quote2" alt="">
                                </div>
                                <div class="review-card--footer">
                                    <figure>
                                        <img src="{{ asset('front/images/user3.webp') }}" alt="" class="img-fluid">
                                        <h3>Antonio<span>6/15/2022</span></h3>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-card">
                                <div class="review-card--body">
                                    <img src="{{ asset('front/images/icon-quote-up.webp') }}" class="img-fluid icon-quote1" alt="">
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
                                    <img src="{{ asset('front/images/icon-quote-down.webp') }}" class="img-fluid icon-quote2" alt="">
                                </div>
                                <div class="review-card--footer">
                                    <figure>
                                        <img src="{{ asset('front/images/user4.webp') }}" alt="" class="img-fluid">
                                        <h3>TJ<span>6/17/2022</span></h3>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-card">
                                <div class="review-card--body">
                                    <img src="{{ asset('front/images/icon-quote-up.webp') }}" class="img-fluid icon-quote1" alt="">
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
                                    <img src="{{ asset('front/images/icon-quote-down.webp') }}" class="img-fluid icon-quote2" alt="">
                                </div>
                                <div class="review-card--footer">
                                    <figure>
                                        <img src="{{ asset('front/images/user5.webp') }}" alt="" class="img-fluid">
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
            <h2 class="mainHead text-center">Follow on social media</h2>
            <ul class="socialIcons__list">
                <li><a href="https://www.facebook.com/CrystalCoastCanines/" target="_blank"><img src="{{ asset('front/images/icon1.webp') }}"
                            alt="image" class="img-fluid"></a></li>
                <li><a href="https://www.instagram.com/cc.canine.training?igsh=MXgwd243Y2JkZml3ZA==" target="_blank"><img
                            src="{{ asset('front/images/icon2.webp') }}" alt="image" class="img-fluid"></a></li>
                <li><a href="https://www.yelp.com/biz/crystal-coast-canine-training-surf-city-2" target="_blank"><i
                            class="fab fa-yelp"></i></a></li>
            </ul>
        </div>
    </section>

    <section class="person--main">
        <div class="row align-items-center justify-content-end">
            <div class="col-md-5" data-aos="fade-right">
                <div class="person--content">
                    <h2 class="mainHead">Help Our Cause</h2>
                    <p>
                        Crystal Coast Canine Training is a veteran-owned and operated dog training and breeding
                        organization. We cater to Veterans and their families. We know the struggle of life after
                        the Military. A service dog can be extremely beneficial to and even save the life of a
                        Veteran. Any time we have donations, the funds go toward training a service dog for a
                        veteran in need.
                    </p>
                    <a href="https://www.paypal.com/donate?token=_1xSFcdWXVLJhROYbAO8RKQwWyJEfSfEpsrTIyxWiG_Tn4PA-1QNh5zmphnEq56UyvFxbz95XeWtx2lZ"
                        target="_blank" class="themeBtn">Donate Now</a>
                    <figure>
                        <img src="{{ asset('front/images/payment.webp') }}" alt="image" class="img-fluid mt-3">
                    </figure>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <figure>
                    <img src="{{ asset('front/images/personimg2.webp') }}" class="img-fluid w-100" alt="img">
                </figure>
            </div>
        </div>
    </section>
@endsection
