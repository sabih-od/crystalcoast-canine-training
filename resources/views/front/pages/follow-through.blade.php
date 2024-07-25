@extends('front.layout.app')
@section('content')
    <!-- Begin: Main Slider -->
    <div class="innerBan">
        <img src="{{ $page->cmsImages('background_banner_image') }}" class="w-100" alt="">
        <div class="overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h2>Our Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Main Slider -->

    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="blog-card">
                        <h5 class="subText">{{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }} | {{ $blog->title }}</h5>
                        <h4 class="title">{{ $blog->heading }}</h4>
                        <img src="{{ $blog->blogImage() }}" alt="image" class="img-fluid">
                        {!! $blog->short_description !!}
                        {!! $blog->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
