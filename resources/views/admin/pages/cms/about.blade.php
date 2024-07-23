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
                    <input type="hidden" name="media_collections[]" value="about_sec_story_img_1">
                    <input type="hidden" name="media_collections[]" value="about_sec_story_img_2">
                    <input type="hidden" name="media_collections[]" value="about_sec_story_img_3">
                    <input type="hidden" name="media_collections[]" value="about_sec_des_img_1">
                    <input type="hidden" name="media_collections[]" value="about_sec_des_img_2">
                    <input type="hidden" name="media_collections[]" value="about_sec_des_img_3">
                    <input type="hidden" name="media_collections[]" value="about_sec_hepl_img_1">
                    <input type="hidden" name="media_collections[]" value="about_sec_soc_img_1">
                    <input type="hidden" name="media_collections[]" value="about_sec_soc_img_2">




                    @csrf
                    {{-- <div class="row mt-5">
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
                    </div> --}}

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
                        <label for="title" class="text-center"
                            style="font-size:2.5rem; color: #555; font-weight: bold;">-----------------------
                            About Us Location Section ----------------------</label>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                    About Us Location
                                    Heading Section</label>
                                <textarea class="form-control" name="about_loc_heading">{{ old('about_loc_heading', $content['about_loc_heading'] ?? '') }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                    About Us Location
                                    Address Section</label>
                                <textarea class="form-control" name="about_loc_address">{{ old('about_loc_address', $content['about_loc_address'] ?? '') }}</textarea>
                            </div>
                        </div>



                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                    About Us Location
                                    Complete Loction Section</label>
                                <textarea class="form-control" name="about_loc_address_com">{{ old('about_loc_address_com', $content['about_loc_address_com'] ?? '') }}</textarea>
                            </div>
                        </div>
                        <label for="title" class="text-center"
                            style="font-size:2.5rem; color: #555; font-weight: bold;">-----------------------
                            About Us Story Section No One----------------------</label>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                    About Us
                                    Story Section No One Title </label>
                                <textarea class="form-control" name="about_sec_title1">{{ old('about_sec_title1', $content['about_sec_title1'] ?? '') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                    About Us
                                    Story Section No One Heading </label>
                                <textarea class="form-control" name="about_sec_head1">{{ old('about_sec_head1', $content['about_sec_head1'] ?? '') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                    About Us
                                    Story Section No One Discreption</label>
                                <textarea class="form-control" rows="4" name="about_sec_des1">{{ old('about_sec_des1', $content['about_sec_des1'] ?? '') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                    About Us
                                    Story Section No One Image</label>
                                <input type="file" class="form-control" name="about_sec_story_img_1" id="cta_image">
                                @if ($page->hasMedia('about_sec_story_img_1'))
                                    <label for="existing_background_banner_image">Existing Banner Image</label>
                                    @foreach ($page->getMedia('about_sec_story_img_1') as $media)
                                        <img src="{{ $media->getUrl() }}" alt="Existing Banner Image"
                                            style="max-width: 200px; max-height: 200px; margin-top: 10px;">
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <label for="title" class="text-center"
                            style="font-size:2.5rem; color: #555; font-weight: bold;">-----------------------
                            About Us Story Section No Two----------------------</label>


                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                    About Us
                                    Story Section No Two Heading</label>
                                <textarea class="form-control" name="about_sec_heading_2">{{ old('about_sec_heading_2', $content['about_sec_heading_2'] ?? '') }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                    About Us
                                    Story Section No Two Discreption</label>
                                <textarea class="form-control" rows="4" name="about_sec_des_2">{{ old('about_sec_des_2', $content['about_sec_des_2'] ?? '') }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                    About Us
                                    Story Section No Two Image</label>
                                <input type="file" class="form-control" name="about_sec_story_img_2" id="cta_image">
                                @if ($page->hasMedia('about_sec_story_img_2'))
                                    <label for="existing_background_banner_image">Existing Banner
                                        Image</label>
                                    @foreach ($page->getMedia('about_sec_story_img_2') as $media)
                                        <img src="{{ $media->getUrl() }}" alt="Existing Banner Image"
                                            style="max-width: 200px; max-height: 200px; margin-top: 10px;">
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <label for="title" class="text-center"
                            style="font-size:2.5rem; color: #555; font-weight: bold;">-----------------------
                            About Us Story Section No three----------------------</label>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                    About Us
                                    Story Section No Three Image</label>
                                <input type="file" class="form-control" name="about_sec_story_img_3" id="cta_image">
                                @if ($page->hasMedia('about_sec_story_img_3'))
                                    <label for="existing_background_banner_image">Existing Banner
                                        Image</label>
                                    @foreach ($page->getMedia('about_sec_story_img_3') as $media)
                                        <img src="{{ $media->getUrl() }}" alt="Existing Banner Image"
                                            style="max-width: 200px; max-height: 200px; margin-top: 10px;">
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 mt-5">
                            <label for=""> About Us
                                Story Section No Three Description</label>
                            <textarea name="about_sec_desc_3" rows="4" placeholder="Description" class="form-control"
                                id="about_sec_desc_3">   {!!  $content['about_sec_desc_3'] ?? '' !!} </textarea>

                        </div>

                        <label for="title" class="text-center"
                            style="font-size:2.5rem; color: #555; font-weight: bold;">-----------------------
                            About Us Discount Section No One----------------------</label>

                            <div class="col-md-6 mt-5">
                                <label for=""> About Us Discount Section Title</label>
                                <textarea name="about_sec_des_title" rows="4" placeholder="Description" class="form-control"
                                    id="about_sec_des_title">{{ old('about_sec_des_title', $content['about_sec_des_title'] ?? '') }}</textarea>
    
                            </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                    About Us Discount Section No One Image</label>
                                <input type="file" class="form-control" name="about_sec_des_img_1" id="cta_image">
                                @if ($page->hasMedia('about_sec_des_img_1'))
                                    <label for="existing_background_banner_image">Existing Banner
                                        Image</label>
                                    @foreach ($page->getMedia('about_sec_des_img_1') as $media)
                                        <img src="{{ $media->getUrl() }}" alt="Existing Banner Image"
                                            style="max-width: 200px; max-height: 200px; margin-top: 10px;">
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <label for=""> About Us Discount Section No One Heading</label>
                            <textarea name="about_sec_des_head_1" rows="4" placeholder="Description" class="form-control"
                                id="about_sec_des_head_1">{{ old('about_sec_des_head_1', $content['about_sec_des_head_1'] ?? '') }}</textarea>

                        </div>

                        <div class="col-md-6 mt-5">
                            <label for=""> About Us Discount Section No One Description</label>
                            <textarea name="about_sec_des_des_1" rows="4" placeholder="Description" class="form-control"
                                id="about_sec_des_des_1">{{ old('about_sec_des_des_1', $content['about_sec_des_des_1'] ?? '') }}</textarea>

                        </div>

                        <div class="col-md-6 mt-5">
                            <label for=""> About Us Discount Section No One Offer</label>
                            <textarea name="about_sec_des_off1" rows="4" placeholder="Description" class="form-control"
                                id="about_sec_des_off1">{{ old('about_sec_des_off1', $content['about_sec_des_off1'] ?? '') }}</textarea>

                        </div>


                        <label for="title" class="text-center"
                            style="font-size:2.5rem; color: #555; font-weight: bold;">-----------------------
                            About Us Discount Section No Two----------------------</label>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                    About Us Discount Section No Two Image</label>
                                <input type="file" class="form-control" name="about_sec_des_img_2" id="cta_image">
                                @if ($page->hasMedia('about_sec_des_img_2'))
                                    <label for="existing_background_banner_image">Existing Banner
                                        Image</label>
                                    @foreach ($page->getMedia('about_sec_des_img_2') as $media)
                                        <img src="{{ $media->getUrl() }}" alt="Existing Banner Image"
                                            style="max-width: 200px; max-height: 200px; margin-top: 10px;">
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <label for=""> About Us Discount Section No Two Heading</label>
                            <textarea name="about_sec_des_head2" rows="4" placeholder="Description" class="form-control"
                                id="about_sec_des_head2">{{ old('about_sec_des_head2', $content['about_sec_des_head2'] ?? '') }}</textarea>

                        </div>

                        <div class="col-md-6 mt-5">
                            <label for=""> About Us Discount Section No Two Description</label>
                            <textarea name="about_sec_des_des2" rows="4" placeholder="Description" class="form-control"
                                id="about_sec_des_des2">{{ old('about_sec_des_des2', $content['about_sec_des_des2'] ?? '') }}</textarea>

                        </div>

                        <div class="col-md-6 mt-5">
                            <label for=""> About Us Discount Section No Two Offer</label>
                            <textarea name="about_sec_des_off2" rows="4" placeholder="Description" class="form-control"
                                id="about_sec_des_off2">{{ old('about_sec_des_off2', $content['about_sec_des_off2'] ?? '') }}</textarea>

                        </div>

                        <label for="title" class="text-center"
                            style="font-size:2.5rem; color: #555; font-weight: bold;">-----------------------
                            About Us Discount Section No Three----------------------</label>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                    About Us Discount Section No Three Image</label>
                                <input type="file" class="form-control" name="about_sec_des_img_3" id="cta_image">
                                @if ($page->hasMedia('about_sec_des_img_3'))
                                    <label for="existing_background_banner_image">Existing Banner
                                        Image</label>
                                    @foreach ($page->getMedia('about_sec_des_img_3') as $media)
                                        <img src="{{ $media->getUrl() }}" alt="Existing Banner Image"
                                            style="max-width: 200px; max-height: 200px; margin-top: 10px;">
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <label for=""> About Us Discount Section No Three Heading</label>
                            <textarea name="about_sec_des_head3" rows="4" placeholder="Description" class="form-control"
                                id="about_sec_des_head3">{{ old('about_sec_des_head3', $content['about_sec_des_head3'] ?? '') }}</textarea>

                        </div>

                        <div class="col-md-6 mt-5">
                            <label for=""> About Us Discount Section No Three Description</label>
                            <textarea name="about_sec_des_desc3" rows="4" placeholder="Description" class="form-control"
                                id="about_sec_des_desc3">{{ old('about_sec_des_desc3', $content['about_sec_des_desc3'] ?? '') }}</textarea>

                        </div>

                        <div class="col-md-6 mt-5">
                            <label for=""> About Us Help Section No Three Offer</label>
                            <textarea name="about_sec_des_off3" rows="4" placeholder="Description" class="form-control"
                                id="about_sec_des_off3">{{ old('about_sec_des_off3', $content['about_sec_des_off3'] ?? '') }}</textarea>

                        </div>

                        <label for="title" class="text-center"
                            style="font-size:2.5rem; color: #555; font-weight: bold;">-----------------------
                            About Us Help Section ----------------------</label>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                    About Us Help Section Image</label>
                                <input type="file" class="form-control" name="about_sec_hepl_img_1" id="cta_image">
                                @if ($page->hasMedia('about_sec_hepl_img_1'))
                                    <label for="existing_background_banner_image">Existing Banner
                                        Image</label>
                                    @foreach ($page->getMedia('about_sec_hepl_img_1') as $media)
                                        <img src="{{ $media->getUrl() }}" alt="Existing Banner Image"
                                            style="max-width: 200px; max-height: 200px; margin-top: 10px;">
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <label for=""> About Us Help Section Heading</label>
                            <textarea name="about_sec_help_head" rows="4" placeholder="Description" class="form-control"
                                id="about_sec_help_head">{{ old('about_sec_help_head', $content['about_sec_help_head'] ?? '') }}</textarea>

                        </div>

                        <div class="col-md-6 mt-5">
                            <label for=""> About Us Help Section Description</label>
                            <textarea name="about_sec_help_des" rows="4" placeholder="Description" class="form-control"
                                id="about_sec_help_des">{{ old('about_sec_help_des', $content['about_sec_help_des'] ?? '') }}</textarea>

                        </div>

                        <div class="col-md-6 mt-5">
                            <label for=""> About Us Help Section Button Text</label>
                            <textarea name="about_sec_help_btn" rows="4" placeholder="Description" class="form-control"
                                id="about_sec_help_btn">{{ old('about_sec_help_btn', $content['about_sec_help_btn'] ?? '') }}</textarea>

                        </div>


                        <label for="title" class="text-center"
                            style="font-size:2.5rem; color: #555; font-weight: bold;">-----------------------
                            About Us Social Section ----------------------</label>
                        <div class="col-md-12 mt-5">
                            <label for=""> About Us Social Section Heading</label>
                            <textarea name="about_sec_soc_head" rows="4" placeholder="Description" class="form-control"
                                id="about_sec_soc_head">{{ old('about_sec_soc_head', $content['about_sec_soc_head'] ?? '') }}</textarea>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                    About Us Social Section First Image</label>
                                <input type="file" class="form-control" name="about_sec_soc_img_1" id="cta_image">
                                @if ($page->hasMedia('about_sec_soc_img_1'))
                                    <label for="existing_background_banner_image">Existing Banner
                                        Image</label>
                                    @foreach ($page->getMedia('about_sec_soc_img_1') as $media)
                                        <img src="{{ $media->getUrl() }}" alt="Existing Banner Image"
                                            style="max-width: 200px; max-height: 200px; margin-top: 10px;">
                                    @endforeach
                                @endif
                            </div>
                        </div>
                       

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">
                                    About Us Social Section Second Image</label>
                                <input type="file" class="form-control" name="about_sec_soc_img_2" id="cta_image">
                                @if ($page->hasMedia('about_sec_soc_img_2'))
                                    <label for="existing_background_banner_image">Existing Banner
                                        Image</label>
                                    @foreach ($page->getMedia('about_sec_soc_img_2') as $media)
                                        <img src="{{ $media->getUrl() }}" alt="Existing Banner Image"
                                            style="max-width: 200px; max-height: 200px; margin-top: 10px;">
                                    @endforeach
                                @endif
                            </div>
                        </div>

                    </div>





            </div>
            <button type="submit" class="btn btn-success">Submit</button>

            </form>
        </div>

    @endsection


    @section('script')
        <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
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



            })
            CKEDITOR.replace('about_sec_desc_3');
        </script>
    @endsection
