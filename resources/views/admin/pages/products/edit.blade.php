@extends('admin.layout.admin')
@section('content')
    <div class="content-page">
        {{-- @dd($itemAddons) --}}

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
                                        <a href="{{ route('admin.products.index') }}">Products</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Products</li>
                                </ol>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <button class="btn btn-circle btn-dark float-right">
                                <a href="{{ route('admin.products.index') }}"
                                    style="text-align:center; color: #fff; padding: 5px; text-decoration: none; display: inline-block;float: right; margin-bottom: 3px">
                                    <i class="fas fa-arrow-left"></i></a>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- end page-title -->

                <form method="POST" id="edit-product-form" action="{{ route('admin.product.update', $product->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Edit Product</h4>
                                    <div class="form-group">
                                        <label for="name">Name </label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            value="{{ $product->name ?? old('name') }}">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="roles">Category *</label>
                                        <select name="product_category_id" id="parent_id" class="form-control">
                                            <option value="0" disabled>Select Category</option>
                                            @forelse ($categories as $category)
                                                <option style="font-weight: bold;" value="{{ $category->id }}"
                                                    @if ($category->id == $product->product_category_id) selected @endif>
                                                    {{ $category->title }}
                                                </option>
                                            @empty
                                                <option value="">No category available</option>
                                            @endforelse
                                        </select>
                                        @error('product_category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="addons">Addon *</label>
                                        <select name="price_category_ids[]" id="addons" class="form-control selectpicker"
                                            multiple data-live-search="true">
                                            <option value="" disabled>Select Addons</option>
                                            @forelse ($itemAddons as $addon)
                                                <option value="{{ $addon->id }}"
                                                    {{ in_array($addon->id, $product->price_category_ids ?? []) ? 'selected' : '' }}>
                                                    {{ $addon->title }}
                                                </option>
                                            @empty
                                                <option value="">No addons available</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    @error('price_category_ids')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="form-group">
                                        <label for="textarea">Description *</label>
                                        <div>
                                            <textarea name="description" id="description" class="form-control" rows="5" placeholder="Detail">{!! $product->description ?? old('description') !!}</textarea>

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
                                                            <label class="heading">Product Image *</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="panel panel-body">
                                                            <div id="crop-image"
                                                                class="span4 cropme text-center d-flex justify-content-center"
                                                                id="landscape"
                                                                style="width: 100%; height: 285px; border: 1px dashed #ddd; background: #f1f1f1;">
                                                                <img id="image-preview"
                                                                    src="{{ $product->productImage('product_image') }}"
                                                                    alt="Image Preview"
                                                                    style="max-width: 100%; max-height: 285px; object-fit:contain">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <input type="file" id="file-input" name="photo"
                                                        style="display: none;" accept="image/*">
                                                    <input type="hidden" id="feature_photo" value="" required="">

                                                    <input type="file" name="gallery[]" class="hidden" id="uploadgallery"
                                                        accept="image/*" multiple="">
                                                    @error('photo')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>


                                                <div class="row text-center">
                                                    <div class="col-6 offset-3">
                                                        <button type="submit" class="addProductSubmit-btn">Update
                                                            Product
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

                    {{-- PRODUCT ADD GALLERY MODAL --}}


                </form>

                <!-- end row -->

            </div>

            @section('script')
                <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
                <script>
                    CKEDITOR.replace('description');
                    //     $(document).ready(function() {
                    //     // Event delegation for plus buttons
                    //     $("#duplicated-container").on("click", "#add-variation", function() {
                    //         var clone = $(".form-group.variation-box:first").clone(true);

                    //         // Clear the color picker and the associated input field


                    //         clone.find("input[type=color]").val(""); // Clear color input
                    //         clone.find("input[type=text]").val(""); // Clear price input
                    //         clone.find("input[type=number]").val(""); // Clear price input
                    //         clone.find("#minus-variation").show(); // Show the minus button for the new duplicate
                    //         clone.find("#add-variation").hide(); // Hide the plus button on the current clone
                    //         $("#duplicated-container").append(clone);
                    //     });

                    //     // Event delegation for minus buttons
                    //     $("#duplicated-container").on("click", "#minus-variation", function() {
                    //         $(this).closest(".form-group.variation-box").remove();
                    //     });


                    // });
                    // $(".checkclick1").on("change", function() {
                    //     if (this.checked) {
                    //         $(this).parent().parent().parent().next().removeClass('show-box');
                    //     } else {
                    //         $(this).parent().parent().parent().next().addClass('show-box');
                    //     }
                    // });
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
                            featurePhoto.value = selectedImage.name; // Set the filename in the hidden input
                            imagePreview.style.display = "block"; // Show the image preview
                            imagePreview.src = URL.createObjectURL(selectedImage); // Set the preview image source
                            uploadBtn.style.display = "none";

                        } else {
                            imagePreview.style.display = "none"; // Hide the image preview if no image is selected
                            uploadBtn.style.display = "block";

                        }
                    });
                </script>
            @endsection
        @endsection
