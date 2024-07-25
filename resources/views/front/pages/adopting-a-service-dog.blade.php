@extends('front.layout.app')
@section('content')


  <!-- Begin: Main Slider -->
  <div class="innerBan">
    <img src="{{ $page->cmsImages('background_banner_image') }}" class="w-100" alt="">
    <div class="overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2>Article</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End: Main Slider -->

<section class="article-detail">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <figure class="article__img">
                    <img src="{{ $blog->blogImage() }}" alt="image" class="img-fluid">
                </figure>
            </div>
            <div class="col-lg-6">
                <div class="article__content">
                    <h2 class="mainHead" data-aos="fade-up">{{ $blog->title }}</h2>
                    <h3 class="subHead mb-0" data-aos="fade-up">Written by: {{ $blog->written_by }}</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="article__content mt-5">
                 {!! $blog->short_description !!}                        
                 {!! $blog->description !!}                        
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
