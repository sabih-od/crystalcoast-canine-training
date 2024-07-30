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
                                        <a href="{{ route('admin.prices.index') }}">Subscriptions</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Subscription</li>
                                </ol>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <button class="btn btn-circle btn-dark float-right">
                                <a href="{{ route('admin.prices.index') }}"
                                    style="text-align:center; color: #fff; padding: 5px; text-decoration: none; display: inline-block;float: right; margin-bottom: 3px">
                                    <i class="fas fa-arrow-left"></i></a>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- end page-title -->

                <form method="POST" id="edit-product-form" action="{{ route('admin.price.update', $price->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Create Subscription</h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name">Name *</label>
                                                <input type="text" name="title" id="name" class="form-control"
                                                    value="{{ $price->title ?? old('title') }}">
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="roles">Category *</label>
                                                <select name="pricing_category_id" id="parent_id" class="form-control">
                                                    <option value="">Select Price Category</option>
                                                    @forelse ($categories as $category)
                                                        <option style="font-weight: bold;" value="{{ $category->id }}"
                                                            @if ($category->id == $price->pricing_category_id) selected @endif>
                                                            {{ $category->title }}
                                                        </option>
                                                    @empty
                                                        <option value="">No category available</option>
                                                    @endforelse
                                                </select>
                                                @error('pricing_category_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name">Type Lesson Or Week </label>
                                                <input type="text" name="lesson_or_week" id="name"
                                                    class="form-control"
                                                    value="{{ $price->lesson_or_week ?? old('lesson_or_week') }}">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name">Price * </label>
                                                <input type="number" name="price" placeholder="e.g 20" step="0.01"
                                                    id="price" min="0" class="form-control"
                                                    value="{{ $price->price ?? old('price') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="textarea">Description *</label>
                                        <div>
                                            <textarea name="description" id="description" class="form-control" rows="5" placeholder="Detail">{!! $price->description ?? old('description') !!}</textarea>

                                        </div>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-dark">Edit
                                Subscription
                            </button>
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

                    document.addEventListener('DOMContentLoaded', function() {
                        const commissionInput = document.getElementById('price');

                        commissionInput.addEventListener('keyup', function(event) {
                            let value = parseFloat(commissionInput.value);
                            if (isNaN(value) || value < 0) {
                                commissionInput.value = 1;
                            }
                        });
                    });
                </script>
            @endsection
        @endsection
