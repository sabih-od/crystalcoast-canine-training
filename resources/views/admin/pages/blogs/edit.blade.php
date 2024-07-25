@extends('admin.layout.admin')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="page-title-box">

                    <div class="row align-items-center ">
                        <div class="col-md-8">
                            <div class="page-title-box">
                                <h4 class="page-title">Admin Panel</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none" href="{{ route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none" href="{{ route('admin.blogs.index') }}">Blogs &
                                            Articles</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Blog Or Article</li>
                                </ol>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <button class="btn btn-circle btn-dark float-right">
                                <a href="{{ route('admin.blogs.index') }}"
                                    style="text-align:center; color: #fff; padding: 5px; text-decoration: none; display: inline-block;float: right; margin-bottom: 3px">
                                    <i class="fas fa-arrow-left"></i></a>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- end page-title -->
                <form id="add-product-form" action="{{ route('admin.blog.update', $blog->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Edit Blog Or Article</h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name">Title *</label>
                                                <input type="text" name="title" id="title" class="form-control"
                                                    value="{{ $blog->title ?? old('title') }}">
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name">Heading *</label>
                                                <input type="text" name="heading" id="title" class="form-control"
                                                    value="{{ $blog->heading ?? old('heading') }}">
                                                @error('heading')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="display: flex;align-items:center">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="textarea">Button Text *</label>
                                                <div>
                                                    <input type="text" name="button_text" id="button_text"
                                                        class="form-control"
                                                        value="{{ $blog->button_text ?? old('button_text') }}">

                                                </div>
                                                @error('button_text')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="is_feature"
                                                    id="flexCheckChecked"{{ $blog->is_feature == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Is Article
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-4" id="heading2">
                                            <div class="form-group">
                                                <label for="textarea">Article Sub Title *</label>
                                                <div>
                                                    <input type="text" name="sub_heading" id="sub_heading"
                                                        class="form-control"
                                                        value="{{ $blog->is_feature == 1 ? ($blog->sub_heading ?? old('sub_heading')) : old('sub_heading') }}">

                                                </div>
                                                @error('sub_heading')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-3" id="heading3">
                                            <div class="form-group">
                                                <label for="textarea">Article Written By *</label>
                                                <div>
                                                    <input type="text" name="written_by" id="written_by"
                                                        class="form-control"
                                                        value="{{ $blog->is_feature == 1 ? ($blog->written_by ?? old('written_by')) : old('written_by') }}">
                                                </div>
                                                @error('written_by')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="textarea">Short Description *</label>
                                        <div>
                                            <textarea class="form-control" name="short_description" placeholder="{{ __('Description') }}" id="description2"
                                                style="width: 100%; height: 300px;">{!! old('short_description', $blog->short_description ?? '') !!}</textarea>

                                        </div>
                                        @error('short_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Description *</label>
                                        <div>
                                            <textarea class="form-control" name="description" placeholder="{{ __('Description') }}" id="description"
                                                style="width: 100%; height: 300px;">{!! old('description', $blog->description ?? '') !!}</textarea>

                                        </div>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="add-product-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="product-description">
                                            <div class="body-area">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="left-area">
                                                            <label class="heading">Blog Image </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="panel panel-body">
                                                            <div class="panel panel-body">
                                                                <div id="crop-image"
                                                                    class="span4 cropme text-center d-flex justify-content-center"
                                                                    id="landscape"
                                                                    style="width: 100%; height: 285px; border: 1px dashed #ddd; background: #f1f1f1;">
                                                                    <img id="image-preview"
                                                                        src="{{ $blog->blogImage() }}"
                                                                        alt="Image Preview"
                                                                        style="max-width: 100%; max-height: 285px; object-fit:contain">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <input type="file" id="file-input" name="photo"
                                                        style="display: none;" accept="image/*">

                                                    @error('photo')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>


                                                <div class="row text-center">
                                                    <div class="col-6 offset-3">
                                                        <button type="submit" class="addProductSubmit-btn">Edit
                                                            Blog Or Article
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- end row -->

            </div>
        @endsection


        @section('script')
            <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('description');
                CKEDITOR.replace('description2');
                //FOR PRODUCT FEATURE IMAGE PREVIEW
                const uploadButton = document.getElementById("crop-image");
                const fileInput = document.getElementById("file-input");
                const featurePhoto = document.getElementById("feature_photo");
                const imagePreview = document.getElementById("image-preview");
                const uploadBtn = document.getElementById("upload-btn");

                uploadButton.addEventListener("click", function() {
                    fileInput.click();
                });

                fileInput.addEventListener("change", function() {
                    if (fileInput.files.length > 0) {
                        const selectedImage = fileInput.files[0];
                        console.log(
                            selectedImage
                        )

                        imagePreview.style.display = "block"; // Show the image preview
                        imagePreview.src = URL.createObjectURL(selectedImage); // Set the preview image source
                        uploadBtn.style.display = "none";

                    } else {
                        imagePreview.style.display = "none"; // Hide the image preview if no image is selected
                        uploadBtn.style.display = "block";

                    }
                });


                // For set product Gallery
                document.addEventListener('DOMContentLoaded', function() {

                    var isFeatureCheckbox = document.getElementById('flexCheckChecked');
                    // var div1 = document.getElementById('heading2').style.display = 'none'
                    // var div2 = document.getElementById('heading3').style.display = 'none'
                    var subHeadingField = document.getElementById('sub_heading')
                    var writtenByField = document.getElementById('written_by')

                    function toggleRequiredFields() {
                        if (isFeatureCheckbox.checked) {
                            document.getElementById('heading2').style.display = 'block'
                            document.getElementById('heading3').style.display = 'block'

                            subHeadingField.setAttribute('required', 'required');
                            writtenByField.setAttribute('required', 'required');
                        } else {
                            document.getElementById('heading2').style.display = 'none'
                            document.getElementById('heading3').style.display = 'none'
                            subHeadingField.removeAttribute('required');
                            writtenByField.removeAttribute('required');
                        }
                    }

                    isFeatureCheckbox.addEventListener('change', toggleRequiredFields);

                    // Initial check
                    toggleRequiredFields();
                })
            </script>
        @endsection
