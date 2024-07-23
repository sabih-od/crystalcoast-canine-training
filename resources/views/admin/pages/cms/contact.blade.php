@extends('admin.layout.admin')
@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            {{-- @dd($data) --}}
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0" style="font-size: 2.5rem; color: #333; font-weight: bold;">Contact Page
                            Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#" style="color: #666;">Contact</a></li>
                            <li class="breadcrumb-item active" aria-current="page" style="color: #333; font-weight: bold;">
                                Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <form action="{{ route('admin.pages.update', ['slug' => $page->slug]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="slug" value="{{ $page->slug }}">
                    <input type="hidden" name="media_collections[]" value="background_banner_image">
                    <input type="hidden" name="media_collections[]" value="contact_page_story_image">

                    <div class="row mt-5">
                        <label for="title" style="font-size:2.5rem; color: #555; font-weight: bold;"
                            class="text-center">---------------Contact
                            Page
                            Banner Section-------------------</label>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="background_banner_image">Banner Image</label>
                                <input type="file" class="form-control" name="background_banner_image"
                                    value="about_right_image" id="background_banner_image">
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
                                <label for="contact_banner_title">Banner Title</label>
                                <textarea class="form-control" name="contact_banner_title" placeholder="Enter Banner Title">{{ old('contact_banner_title', $content['contact_banner_title'] ?? '') }}</textarea>
                            </div>
                        </div>

                        <label for="title" style="font-size:2.5rem; color: #555; font-weight: bold;"
                            class="text-center">---------------Contact
                            Form
                            Section One-------------------</label>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_banner_title">Contact Form Title One</label>
                                <textarea class="form-control" name="contact_form_heading" placeholder="Enter Banner Title">{{ old('contact_form_heading', $content['contact_form_heading'] ?? '') }}</textarea>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_banner_title">Contact Form Button One Text</label>
                                <textarea class="form-control" name="contact_btn" placeholder="Enter Banner Title">{{ old('contact_btn', $content['contact_btn'] ?? '') }}</textarea>
                            </div>
                        </div>
                        <label for="title" style="font-size:2.5rem; color: #555; font-weight: bold;"
                            class="text-center">---------------Contact
                            Page Map
                            Section -------------------</label>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_banner_title">Contact Page Mape Link</label>
                                <textarea class="form-control" name="contact_map" placeholder="Enter Banner Title">{{ old('contact_map', $content['contact_map'] ?? '') }}</textarea>
                            </div>
                        </div>


                        <label for="title" style="font-size:2.5rem; color: #555; font-weight: bold;"
                            class="text-center">---------------Contact
                            Page Story
                            Section -------------------</label>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_banner_title">Contact Page Story heading</label>
                                <textarea class="form-control" name="contact_sto_head" placeholder="Enter Banner Title">{{ old('contact_sto_head', $content['contact_sto_head'] ?? '') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_banner_title">Contact Page Story Description</label>
                                <textarea name="contact_page_story_des" rows="4" placeholder="Description" class="form-control"
                                    id="contact_page_story_des">{!! $content['contact_page_story_des'] ?? '' !!}</textarea>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="background_banner_image">Contact Page Story Image</label>
                                <input type="file" class="form-control" name="contact_page_story_image"
                                    value="contact_page_story_image" id="background_banner_image">
                                @if ($page->hasMedia('contact_page_story_image'))
                                    <label for="existing_background_banner_image">Existing Banner Image</label>
                                    @foreach ($page->getMedia('contact_page_story_image') as $media)
                                        <img src="{{ $media->getUrl() }}" alt="Existing Banner Image"
                                            style="max-width: 200px; max-height: 200px; margin-top: 10px;">
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <label for="title" style="font-size:2.5rem; color: #555; font-weight: bold;"
                            class="text-center">---------------Contact
                            Form
                            Section Two-------------------</label>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_banner_title">Contact Form Title Two</label>
                                <textarea class="form-control" name="contact_form_heading_1" placeholder="Enter Banner Title">{{ old('contact_form_heading_1', $content['contact_form_heading_1'] ?? '') }}</textarea>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_banner_title">Contact Form Button Two Text</label>
                                <textarea class="form-control" name="contact_btn_1" placeholder="Enter Banner Title">{{ old('contact_btn_1', $content['contact_btn_1'] ?? '') }}</textarea>
                            </div>
                        </div>

                        <label for="title" style="font-size:2.5rem; color: #555; font-weight: bold;"
                            class="text-center">---------------Contact
                            Us Location
                            Section-------------------</label>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_banner_title">Contact Location Heading</label>
                                <textarea class="form-control" name="contact_loc_head" placeholder="Enter Banner Title">{{ old('contact_loc_head', $content['contact_loc_head'] ?? '') }}</textarea>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_banner_title">Contact Location Description</label>
                                <textarea class="form-control" name="contact_loc_des" placeholder="Enter Banner Title">{{ old('contact_loc_des', $content['contact_loc_des'] ?? '') }}</textarea>
                            </div>
                        </div>

                        <label for="title" style="font-size:2.5rem; color: #555; font-weight: bold;"
                            class="text-center">---------------Contact
                            Us Phone
                            Section-------------------</label>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_banner_title">Contact Phone Heading</label>
                                <textarea class="form-control" name="contact_phone_head" placeholder="Enter Banner Title">{{ old('contact_phone_head', $content['contact_phone_head'] ?? '') }}</textarea>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_banner_title">Contact Phone Description</label>
                                <textarea class="form-control" name="contact_phone_des" placeholder="Enter Banner Title">{{ old('contact_phone_des', $content['contact_phone_des'] ?? '') }}</textarea>
                            </div>
                        </div>

                        <label for="title" style="font-size:2.5rem; color: #555; font-weight: bold;"
                            class="text-center">---------------Contact
                            Us Timing
                            Section-------------------</label>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_banner_title">Contact Timing Heading</label>
                                <textarea class="form-control" name="contact_time_head" placeholder="Enter Banner Title">{{ old('contact_time_head', $content['contact_time_head'] ?? '') }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_banner_title">Contact Phone Description</label>
                                <textarea class="form-control"  id="contact_time_des" name="contact_time_des" placeholder="Enter Banner Title">{!! $content['contact_time_des'] ?? '' !!}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>

            </div>

        @endsection
        @section('script')
            <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('contact_page_story_des');
                CKEDITOR.replace('contact_time_des');

            </script>
        @endsection
