@extends('front.layout.app')
@section('content')
<!-- Begin: Main Slider -->
    <div class="innerBan">
        <img src="{{ $page->cmsImages('background_banner_image') ?? '' }}" class="w-100" alt="">
        <div class="overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h2>{{ $page->content['contact_banner_title'] ?? '' }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Main Slider -->
    <section class="contactSec">
        <div class="container">
            <div class="abthead mb-3">
                <h2 class="mainHead" data-aos="fade-up">{{ $page->content['contact_form_heading'] ?? '' }}</h2>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <form class="contactForms">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *" name="fname">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name *" name="lname">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email*" name="email">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Message" name="msg"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="viewWork">
                                    <button type="submit"
                                        class="themeBtn">{{ $page->content['contact_btn'] ?? '' }}</button>
                                    <div id="contactFormsResult"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5">
                    <div class="contactBoxs">
                        <figure><i class="fas fa-map-marker-alt"></i></figure>
                        <a href="https://maps.app.goo.gl/Pq9QG2mp2bCe9oyMA"
                            target="_blank"><span>{{ $page->content['contact_loc_head'] ?? '' }}
                            </span>{{ $page->content['contact_loc_des'] ?? '' }}</a>
                    </div>
                    <div class="contactBoxs">
                        <figure><i class="fas fa-phone-alt"></i></figure>
                        <a
                            href="tel:2527250674"><span>{{ $page->content['contact_phone_head'] ?? '' }}</span>{{ $page->content['contact_phone_des'] ?? '' }}</a>
                    </div>
                    <div class="contactBoxs">
                        <figure><i class="fas fa-clock"></i></figure>
                        <div class="div">
                            <a href="#"><span>{{ $page->content['contact_time_head'] ?? '' }}</span></a>
                            {!! $page->content['contact_time_des'] ?? '' !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="mapSec">
        <iframe src="{{ $page->content['contact_map'] ?? '' }}" width="100%" height="580" style="border:0;"
            allowfullscreen=""referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>

    <section class="contactabout">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="aboutwrap">
                        <figure>
                            <img src="{{ $page->cmsImages('contact_page_story_image') ?? '' }}" class="img-fluid"
                                alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="aboutcntnt">
                        <h3>{{ $page->content['contact_sto_head'] ?? '' }}</h3>
                        {!! $page->content['contact_page_story_des'] ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contactSec hirringsec">
        <div class="container">
            <div class="row justify-content-center bgClr">
                <div class="abthead text-center mb-3">
                    <h2 class="mainHead" data-aos="fade-up">{{ $page->content['contact_form_heading_1'] ?? '' }}</h2>
                </div>
                <div class="col-md-8">
                    <form class="contactForms">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone *">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email*">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group atchFite">
                                    <input type="file" class="form-control" placeholder="Your Email*">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="viewWork text-center">
                                    <button class="themeBtn ">{{ $page->content['contact_btn_1'] ?? '' }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </section>
@endsection
