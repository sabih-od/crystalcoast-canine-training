@extends('admin.layout.admin')
@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0" style="font-size: 2.5rem; color: #333; font-weight: bold;">Home Page
                            Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#" style="color: #666;">Home</a></li>
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
                    <input type="hidden" name="media_collections[]" value="mouse_image">
                    <input type="hidden" name="media_collections[]" value="home_about_sec_rig_img">
                    <input type="hidden" name="media_collections[]" value="home_about_sec_img">
                    <input type="hidden" name="media_collections[]" value="home_up_coming_img">
                    <input type="hidden" name="media_collections[]" value="antic_image">

{{-- 
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="meta_title">Title</label>
                                <input type="text" class="form-control" id="meta_title" name="meta_title"
                                    placeholder="Enter Title" value="{{ old('meta_title', $page->meta_title) }}" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="meta_description">Description</label>
                                <input type="text" class="form-control" id="meta_description" name="meta_description"
                                    placeholder="Enter Description"
                                    value="{{ old('meta_description', $page->meta_description) }}" required>
                            </div>
                        </div>
                    </div> --}}

                    <div class="row mt-5">
                        <label for="title" style="font-size:2.5rem; color: #555; font-weight: bold;"
                            class="text-center">---------------Home
                            Page
                            Banner Section-------------------</label>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="background_banner_image"> Banner Background Image</label>
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
                                <label for="contact_banner_title">Banner First heading</label>
                                <textarea class="form-control" name="banner_heading" placeholder="Enter Banner Title">{{ old('banner_heading', $content['banner_heading'] ?? '') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_banner_title">Banner Second heading</label>
                                <textarea class="form-control" name="banner_heading1" placeholder="Enter Banner Title">{{ old('banner_heading1', $content['banner_heading1'] ?? '') }}</textarea>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_banner_title">Banner Paragraph</label>
                                <textarea class="form-control" name="banner_para" placeholder="Enter Banner Title">{{ old('banner_para', $content['banner_para'] ?? '') }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_banner_title">Banner Thid heading</label>
                                <textarea class="form-control" name="banner_btn" placeholder="Enter Banner Title">{{ old('banner_btn', $content['banner_btn'] ?? '') }}</textarea>
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
                })

                $(document).ready(function() {
                    $('.add-button').click(function() {
                        var section = $('#testimonial').clone();
                        section.removeAttr('id');
                        section.show();
                        $('#testimonials').append(section);
                    });
                    $(document).on('click', '.remove-button', function() {
                        $(this).closest('.row').remove();
                    });
                });
                $(document).ready(function() {
                    $('.add-blog').click(function() {
                        var blog = $('#blog').clone();
                        blog.removeAttr('id');
                        blog.show();
                        $('#blogs').append(blog);
                    });
                    $(document).on('click', '.remove-blog', function() {
                        $(this).closest('.row').remove();
                    });
                });
            </script>
        @endsection
