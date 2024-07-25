@extends('front.layout.app')
@section('content')
    <!-- Begin: Main Slider -->
    <div class="innerBan">
        <img src="{{ $page->cmsImages('background_banner_image') ?? '' }}" class="w-100" alt="">
        <div class="overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h2>{{ $page->content['banner_heading'] ?? '' }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Main Slider -->

    <section class="blog">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $item)
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="blog-card">
                            <img src="{{ $item->blogImage('blog_image') }}" alt="image" class="img-fluid">
                            <h5 class="subText">March 6, 2024 |
                                {{ $item->title ?? '' }}
                                {{-- Behavior --}}
                            </h5>
                            <h4 class="title">
                                {{ $item->heading ?? '' }}
                                {{-- Protecting your dog --}}
                            </h4>
                            {!! $item->short_description !!}
                            {{-- <p>
                        We all know we are supposed to protect our dogs from illness and disease. We spend hundreds
                        if not thousands per year on health tests, spay/neuter, flea/ tick/various worm
                        preventatives, and even countless dollars on collars, leashes, and sometimes clothing.
                    </p> --}}
                            <a href=" {{ route('front.blog.detail', ['blog' => $item->id]) }}"
                                class="themeBtn">{{ $item->button_text }}</a>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="col-md-6" data-aos="fade-up">
                    <div class="blog-card">
                        <img src="front/images/blog2.webp" alt="image" class="img-fluid">
                        <h5 class="subText">October 31, 2023 | Behavior</h5>
                        <h4 class="title">The "Welfare" Dog</h4>
                        <p>
                            If you have ever heard the term "Welfare Dog," you have also probably heard the terms "hand
                            feeding" or "not giving the food away free." As we train our dogs, it is important to find
                            something they will work for; a toy, food, or good old-fashioned praise.
                        </p>
                        <a href="{{ route('front.welfare') }}" class="themeBtn">Continue Reading</a>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up">
                    <div class="blog-card">
                        <img src="front/images/blog3.webp" alt="image" class="img-fluid">
                        <h5 class="subText">August 8, 2023 | Obedience</h5>
                        <h4 class="title">FOLLOW THROUGH</h4>
                        <p>
                            All throughout your life you may have heard the term "follow through;" on your homework, on
                            a job, or on a promise. Well this phrase is especially important in dog training. Dogs are
                            just like we were as children. I have a teen and a toddler, so can be very relatable.
                        </p>
                        <a href=" {{ route('front.follow') }}" class="themeBtn">Continue Reading</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="article">
        <div class="container">
            @foreach ($featureBlogs as $feature)
                <div class="article__content text-center">
                    <h3 class="subHead" data-aos="fade-up">
                        {{-- article --}}
                        {{ $feature->sub_heading }}
                    </h3>
                    <h2 class="mainHead" data-aos="fade-up">
                        {{ $feature->heading }} {{-- featured article --}}
                    </h2>
                    <h3 class="subHead" data-aos="fade-up">
                        {{-- Your Life After Adopting a Service Dog --}}
                        {{ $feature->heading }}
                    </h3>
                    <h5 data-aos="fade-up">Written by: {{ $feature->written_by }}</h5>
                    {!! $feature->short_description !!}
                    {{-- <p data-aos="fade-up">
                    Service dogs can be wonderful companions for people with disabilities. The right service dog will
                    help you live independently and lift your spirits. However, it is understandable that you might feel
                    some anxiety about adopting a service dog, particularly if you are a first-time pet owner. By
                    understanding some of the benefits and responsibilities you will receive along with your service
                    dog, you will get a clear picture of what life might be like after welcoming your new pet into the
                    household. Here’s some info to get you started, courtesy of Crystal Coast Canines.
                </p> --}}
                    <div data-aos="fade-up">
                        <a href="{{ route('front.article.detail', ['blog' => $feature->id]) }}" class="themeBtn">
                            {{-- Read Article --}}
                            {{ $feature->button_text }}
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection
