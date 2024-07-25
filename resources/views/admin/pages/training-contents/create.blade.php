@extends('admin.layout.admin')
@section('content')
    <style>
        select option {
            font-weight: normal;
        }

        select option[style="font-weight: bold"] {
            font-weight: bold;
        }
    </style>
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
                                        <a href="{{ route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('admin.trainingContents.index') }}">Trainings</a>
                                    </li>
                                    <li class="breadcrumb-item active">Create Training</li>
                                </ol>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <button class="btn btn-circle btn-dark float-right">
                                <a href="{{ route('admin.trainingContents.index') }}"
                                    style="text-align:center; color: #fff; padding: 5px; text-decoration: none; display: inline-block;float: right; margin-bottom: 3px">
                                    <i class="fas fa-arrow-left"></i></a>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- end page-title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Create Training</h4>

                                <form method="POST" action="{{ route('admin.trainingContent.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="name">Title *</label>
                                                        <input type="text" name="title" id="title" class="form-control"
                                                            value="{{ old('title') }}">
                                                        @error('title')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="name">Description *</label>
                                                        <textarea class="form-control" name="description" placeholder="{{ __('Description') }}" id="description"
                                                        style="width: 100%; height: 300px;">{{ old('description')}}</textarea>
                                                        @error('description')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="parent_id">Training Image</label>
                                            <div class="col-lg-12">
                                                <div class="panel panel-body">
                                                    <div id="crop-image"
                                                        class="span4 cropme text-center d-flex justify-content-center"
                                                        id="landscape"
                                                        style="width: 100%; height: 285px; border: 1px dashed #ddd; background: #f1f1f1;">
                                                        <img id="image-preview"
                                                            src=""
                                                            alt="Image Preview"
                                                            style="max-width: 100%; max-height: 285px; object-fit:contain">
                                                    </div>
                                                </div>

                                            </div>
                                            <input type="file" id="file-input" name="image" style="display: none;"
                                                accept="image/*">
                                            <input type="hidden" id="feature_photo" value="" required="">
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Create
                                        </button>


                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
        @endsection

        @section('script')
            <script>
                //FOR PRODUCT FEATURE IMAGE PREVIEW
                let uploadButton = document.getElementById("crop-image");
                const fileInput = document.getElementById("file-input");
                const featurePhoto = document.getElementById("feature_photo");
                const imagePreview = document.getElementById("image-preview");

                uploadButton.addEventListener("click", function() {
                    fileInput.click();
                });

                fileInput.addEventListener("change", function() {
                    if (fileInput.files.length > 0) {
                        const selectedImage = fileInput.files[0];
                        featurePhoto.value = selectedImage.name; // Set the filename in the hidden input
                        imagePreview.style.display = "block"; // Show the image preview
                        imagePreview.src = URL.createObjectURL(selectedImage); // Set the preview image source

                    } else {
                        imagePreview.style.display = "none"; // Hide the image preview if no image is selected

                    }
                });
            </script>
        @endsection