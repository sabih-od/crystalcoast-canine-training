<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Fine-Design - Admin Panel</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description"/>
    <meta content="Themesdesign" name="author"/>
    {{--    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">--}}

    <link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <link href="{{ asset('admin-assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin-assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin-assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin-assets/css/style.css') }}" rel="stylesheet" type="text/css">
    {{-- toastr --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>


</head>

<body>
<div class="accountbg"></div>

<!-- Begin page -->
<div class="home-btn d-none d-sm-block">
  
</div>

<div class="wrapper-page">

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5">
                <div class="card card-pages shadow-none mt-4">
                    <div class="card-body">
                        <div class="text-center mt-0 mb-3">
                            <a href="" class="logo logo-admin">
                                @if(!empty($settings->header_logo))
                                    <img src="{{ asset('setting_images/' . $settings->header_logo) ?? '' }}"
                                         class="img-fluid"
                                         alt="img">
                                @else
                                    <img src="{{ $settings->settingImage('header_logo') ?? ''  }}" class="img-fluid"
                                         alt="">

                                @endif
                            </a>
                            <p class="text-muted w-75 mx-auto mb-4 mt-4">Enter your email address and password to
                                access
                                admin panel. </p>
                        </div>

                        <form class="form-horizontal mt-4" action="{{ route('admin.login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="col-12">
                                    <label for="username">Email</label>
                                    <input class="form-control" type="email" required="" id="username"
                                           name="email"
                                           placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-12">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" required="" id="password"
                                           name="password"
                                           placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-12">
                                    <div class="checkbox checkbox-primary">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"> Remember me</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center mt-3">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log
                                        In
                                    </button>
                                </div>
                            </div>
                        </form>
                        <a href="{{ route('front.home') }}" class="text-center"><p><i class="fas fa-arrow-left"></i>
                                Back To Website</p></a>
                    </div>

                </div>

            </div>
        </div>
        <!-- end row -->
    </div>
</div>

<!-- jQuery  -->
<script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/metismenu.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('admin-assets/js/waves.min.js') }}"></script>

<script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
{{-- toastr js --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script>
    $(document).ready(function () {
        toastr.options.timeOut = 10000;
        @if (Session::has('error'))
        toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
        @endif
    });

</script>
<!-- App js -->
<script src="{{ asset('admin-assets/js/app.js') }}"></script>

</body>

</html>
