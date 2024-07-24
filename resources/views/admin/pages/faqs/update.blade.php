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
                                        <a class="text-decoration-none" href="{{ route('admin.faqs.index') }}">Faq</a>
                                    </li>
                                    <li class="breadcrumb-item active">Update Faq</li>
                                </ol>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <button class="btn btn-circle btn-dark float-right">
                                <a href="{{ route('admin.faqs.index') }}"
                                    style="text-align:center; color: #fff; padding: 5px; text-decoration: none; display: inline-block;float: right; margin-bottom: 3px">
                                    <i class="fas fa-arrow-left"></i></a>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- end page-title -->
                <form id="add-product-form" action="{{ route('admin.faq.update', $faq->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Update Faq</h4>
                                    <div class="form-group">
                                        <label for="name">Title *</label>
                                        <input type="text" name="title" id="title" class="form-control"
                                            value="{{ $faq->title ?? '' }}">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Description *</label>
                                        <div>
                                            <textarea class="from-control" name="description" id="description" placeholder="{{ __('Description') }}" id="description"
                                                style="width: 100%; height: 300px;">{!! $faq->description  !!}</textarea>

                                        </div>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>




                        <div class="row text-center">
                            <div class="col-6 offset-3">
                                <button type="submit" class="btn btn-dark">Update
                                    Faq
                                </button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    </form>

    <!-- end row -->
@endsection


@section('script')
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('description');
    </script>
@endsection