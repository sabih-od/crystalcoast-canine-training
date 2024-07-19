@extends('admin.layout.admin')
@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            {{--@dd($data)--}}
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0" style="font-size: 2.5rem; color: #333; font-weight: bold;">Footer Content
                            Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#" style="color: #666;">Footer</a></li>
                            <li class="breadcrumb-item active" aria-current="page"
                                style="color: #333; font-weight: bold;">
                                Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <form action="{{route('admin.pages.update', ['slug' => $page->slug])}}" method="post"
                      enctype="multipart/form-data">
                    <input type="hidden" name="slug" value="{{ $page->slug }}">
                    <input type="hidden" name="media_collections[]" value="footer_logo">

                    @csrf
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title"
                                       style="font-size: 1.2rem; color: #555; font-weight: bold;">Title</label>
                                <input type="text" class="form-control" id="title" name="meta_title"
                                       placeholder="Enter Title"
                                       style="border: 1px solid #ccc; border-radius: 5px; padding: 8px 12px; margin-top: 5px;"
                                       value="{{$page->meta_title ?? ''}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title"
                                       style="font-size: 1.2rem; color: #555; font-weight: bold;">Description</label>
                                <input type="text" class="form-control" id="title" name="meta_description"
                                       placeholder="Enter Description"
                                       style="border: 1px solid #ccc; border-radius: 5px; padding: 8px 12px; margin-top: 5px;"
                                       value="{{$page->meta_description ?? ''}}">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <label for="title" style="font-size:2.5rem; color: #555; font-weight: bold;">---------------Footer
                            Content
                            Section-------------------</label>
                        <div class="form-group">
                            <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">Footer Logo</label>
                            <input type="file" class="form-control" name="footer_logo"
                                   id="social_media_pic1">
                            @if($page->hasMedia('footer_logo'))
                                <label for="footer_logo">Existing Social-Media Image</label>
                                @foreach($page->getMedia('footer_logo') as $media)
                                    <img src="{{ $media->getUrl() }}" alt="Existing Banner Image"
                                         style="max-width: 200px; max-height: 200px; margin-top: 10px;">
                                @endforeach
                            @endif
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">Footer
                                    Bottom Text
                                </label>
                                <textarea class="form-control"
                                          name="footer_text">{{ old('footer_text', $content['footer_text'] ?? '') }}</textarea>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">Footer Link 1
                            </label>
                            <textarea class="form-control"
                                      name="link1">{{ old('link1', $content['link1'] ?? '') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">Footer
Link 2
                            </label>
                            <textarea class="form-control"
                                      name="link2">{{ old('link2', $content['link2'] ?? '') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">Footer Link 3
                            </label>
                            <textarea class="form-control"
                                      name="link3">{{ old('link3', $content['link3'] ?? '') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="title" style="font-size: 1.2rem; color: #555; font-weight: bold;">Footer Link 4
                            </label>
                            <textarea class="form-control"
                                      name="link4">{{ old('link4', $content['link4'] ?? '') }}</textarea>
                        </div>


                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>

            @endsection


            @section('script')

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $('#banner_image1').change(function () {
                            var input = this;
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    $('#banner_image1_preview').attr('src', e.target.result).show();
                                }
                                reader.readAsDataURL(input.files[0]);
                            }
                        });
                    });
                </script>
@endsection
