@extends('admin.layout.admin')
@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0" style="font-size: 2.5rem; color: #333; font-weight: bold;">About Page
                            Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#" style="color: #666;">About</a></li>
                            <li class="breadcrumb-item active" aria-current="page" style="color: #333; font-weight: bold;">
                                Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <form action="{{ route('admin.pages.update', ['slug' => $page->slug]) }}" method="post"
                    enctype="multipart/form-data">
                    <input type="hidden" name="slug" value="{{ $page->slug }}">
                    <input type="hidden" name="media_collections[]" value="background_banner_image">
                    <input type="hidden" name="media_collections[]" value="about_sec_rig_img">
                    <input type="hidden" name="media_collections[]" value="about_sec_img_2">


                    @csrf
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title"
                                    style="font-size: 1.2rem; color: #555; font-weight: bold;">Title</label>
                                <input type="text" class="form-control" id="title" name="meta_title"
                                    placeholder="Enter Title"
                                    style="border: 1px solid #ccc; border-radius: 5px; padding: 8px 12px; margin-top: 5px;"
                                    value="{{ $page->meta_title ?? '' }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title"
                                    style="font-size: 1.2rem; color: #555; font-weight: bold;">Description</label>
                                <input type="text" class="form-control" id="title" name="meta_description"
                                    placeholder="Enter Description"
                                    style="border: 1px solid #ccc; border-radius: 5px; padding: 8px 12px; margin-top: 5px;"
                                    value="{{ $page->meta_description ?? '' }}">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <label for="title" class="text-center"
                            style="font-size:2.5rem; color: #555; font-weight: bold;">---------------About
                            Page
                            Banner Section-------------------</label>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;"> Banner
                                    Image
                                    First</label>
                                <input type="file" class="form-control" name="background_banner_image"
                                    id="background_banner_image">
                                @if ($page->hasMedia('background_banner_image'))
                                    <label for="existing_background_banner_image">Existing Banner Image</label>
                                    @foreach ($page->getMedia('background_banner_image') as $media)
                                        <img src="{{ $media->getUrl() }}" alt="Existing Banner Image"
                                            style="max-width: 200px; max-height: 200px; margin-top: 10px;">
                                    @endforeach
                                @endif
                            </div>


                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">Banner
                                    Title
                                </label>
                                <textarea class="form-control" name="about_banner_title">{{ old('about_banner_title', $content['about_banner_title'] ?? '') }}</textarea>
                            </div>

                        </div>

                        <div class="row mt-5">
                            <label for="title" class="text-center"
                                style="font-size:2.5rem; color: #555; font-weight: bold;">-----------------------
                                About Us Story Section One----------------------</label>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="title"
                                                style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                                About Us Section
                                                Heading</label>
                                            <textarea class="form-control" name="home_about_sec_heading">{{ old('home_about_sec_heading', $content['home_about_sec_heading'] ?? '') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="title"
                                                style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                                About Us
                                                Description</label>
                                            <textarea class="form-control" name="about_sec_des">{{ old('about_sec_des', $content['about_sec_des'] ?? '') }}</textarea>
                                        </div>
                                    </div>
                                    u
                                    <div class="form-group">
                                        <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                            About Us Right Section Image</label>
                                        <input type="file" class="form-control" name="about_sec_rig_img" id="cta_image">
                                        @if ($page->hasMedia('about_sec_rig_img'))
                                            <label for="existing_background_banner_image">Existing Banner Image</label>
                                            @foreach ($page->getMedia('about_sec_rig_img') as $media)
                                                <img src="{{ $media->getUrl() }}" alt="Existing Banner Image"
                                                    style="max-width: 200px; max-height: 200px; margin-top: 10px;">
                                            @endforeach
                                        @endif
                                    </div>

                                </div>
                            </div>

                            <div class="row mt-5">
                                <label for="title" class="text-center"
                                    style="font-size:2.5rem; color: #555; font-weight: bold;">-----------------------
                                    About Us Story Section No Two----------------------</label>

                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="title"
                                                style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                                About Us Section
                                                Heading</label>
                                            <textarea class="form-control" name="about_sec_heading_2">{{ old('about_sec_heading_2', $content['about_sec_heading_2'] ?? '') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title"
                                                style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                                About Us Section
                                                Image</label>
                                            <input type="file" class="form-control" name="about_sec_img_2"
                                                id="cta_image">
                                            @if ($page->hasMedia('about_sec_img_2'))
                                                <label for="existing_background_banner_image">Existing Banner
                                                    Image</label>
                                                @foreach ($page->getMedia('about_sec_img_2') as $media)
                                                    <img src="{{ $media->getUrl() }}" alt="Existing Banner Image"
                                                        style="max-width: 200px; max-height: 200px; margin-top: 10px;">
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <button class="btn btn-success">+</button>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="row mt-5">
                            <label for="title" class="text-center"
                                style="font-size:2.5rem; color: #555; font-weight: bold;">-----------------------
                                About Us Story Section No three----------------------</label>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="title"
                                                style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                                About Us Section
                                                Heading</label>
                                            <textarea class="form-control" name="about_sec_heading_3">{{ old('about_sec_heading_3', $content['about_sec_heading_3'] ?? '') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="title"
                                                style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                                About Us
                                                Description</label>
                                            <textarea class="form-control" name="about_sec_des_3">{{ old('about_sec_des_3', $content['about_sec_des_3'] ?? '') }}</textarea>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>




                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>

                </form>
            </div>

        @endsection


        @section('script')
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                            $('#banner_image1').change(function() {
                                var input = this;
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        $('#banner_image1_preview').attr('src', e.target.result).show();
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            });
                        }
                    @endsection
