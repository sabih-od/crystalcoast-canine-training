@extends('front.layout.app')
@section('content')
    <div class="innerBan galleryInner">
        <img src="{{ $page->cmsImages('background_banner_image') }}" class="w-100" alt="">
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

    <section class="galleySection">
        <div class="container-fluid p-0">
            <div class="abthead mb-4">
                <h2 class="mainHead" data-aos="fade-up">GRADUATES</h2>
            </div>
            <div class="row">
                @foreach ($graduates as $item)
                    <div class="col-md-4">
                        <div class="gallwrap" data-aos="fade-up">
                            <a href="{{ asset('storage/' . $item->image) }}" data-fancybox="graduates">
                                <figure>
                                    <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="">
                                </figure>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="galleySection galleryTwo">
        <div class="container-fluid p-0">
            <div class="abthead mb-4">
                <h2 class="mainHead" data-aos="fade-up">TRAINING GALLERY</h2>
            </div>
            <div class="row">
                @foreach ($trainings as $item)
                    <div class="col-md-4">
                        <div class="gallwrap" data-aos="fade-up">
                            <a href="{{ asset('storage/' . $item->image) }}" data-fancybox="training">
                                <figure>
                                    <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="">
                                </figure>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
