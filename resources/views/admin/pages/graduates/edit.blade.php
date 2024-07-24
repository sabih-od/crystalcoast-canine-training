@extends('admin.layout.admin')

@section('content')
    <div class="content-page">
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
                                        <a href="{{ route('admin.graduates.index') }}">Graduates Gallery</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Graduate Gallery</li>
                                </ol>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <button class="btn btn-circle btn-dark float-right">
                                <a href="{{ route('admin.graduates.index') }}"
                                    style="text-align:center; color: #fff; padding: 5px; text-decoration: none; display: inline-block;float: right; margin-bottom: 3px">
                                    <i class="fas fa-arrow-left"></i></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.graduate.update', ['graduate' => $graduate->id]) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group col-md-12">
                                            <label for="parent_id">Category Image</label>
                                            <div class="col-lg-12">
                                                <div class="panel panel-body">
                                                    <div id="crop-image"
                                                        class="span4 cropme text-center d-flex justify-content-center"
                                                        id="landscape"
                                                        style="width: 100%; height: 285px; border: 1px dashed #ddd; background: #f1f1f1;">
                                                        <img id="image-preview" src="{{ asset( 'storage/' .$graduate->image) }}"
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
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Category</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
