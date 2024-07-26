<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Crystal Coast Canine Training - Admin Panel</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('admin-assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin-assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin-assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin-assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    {{-- toastr --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

    <style>
        .form-container {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            margin: auto;
            max-width: 400px;
            margin-top: 50px;
        }

        .name {
            border: 2px solid black;
        }

        #sidebar-menu ul li a {
            text-decoration: none !important;
        }

        .cke_notification {
            display: none;
        }
    </style>


</head>

<body>

    {{-- ?LOADER --}}
    <div id="loader-container">
        <div id="loader-text">
            <span class="letter">P</span>
            <span class="letter">L</span>
            <span class="letter">E</span>
            <span class="letter">A</span>
            <span class="letter">S</span>
            <span class="letter">E</span>
            <span class="letter"> </span>
            <span class="letter">W</span>
            <span class="letter">A</span>
            <span class="letter">I</span>
            <span class="letter">T...</span>
        </div>
    </div>


    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="#" class="logo">
                    @if (!empty($settings->header_logo))
                        <img src="{{ asset('setting_images/' . $settings->header_logo) ?? '' }}" class="img-fluid"
                            alt="img">
                    @else
                        <img src="{{ $settings->settingImage('header_logo') ?? '' }}" class="img-fluid" alt="">
                    @endif
                </a>
            </div>

            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">
                    <!-- language-->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('admin-assets/images/flags/us_flag.jpg') }}" class="mr-2"
                                height="12" alt="" />
                            English
                        </a>

                    </li>

                    <!-- full screen -->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                            <i class="fas fa-expand noti-icon"></i>
                        </a>
                    </li>


                    <li class="dropdown notification-list list-inline-item">

                        <a class="nav-link waves-effect" href="{{ route('admin.logout') }}" id="btn-fullscreen">
                            <i class="mdi mdi-power text-danger"></i>
                            Logout </a>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->
