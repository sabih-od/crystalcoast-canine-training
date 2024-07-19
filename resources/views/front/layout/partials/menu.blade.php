<!-- MOUSE CURSOR -->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>

<!-- NAV HEADER -->

<header class="">
    <div class="main-navigate">
        <div class="an-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-lg p-0">
                    <a class="navbar-brand d-none" href="{{ route('front.home') }}">
                        <img src="{{ asset('front/images/logo.webp') }}" alt="img">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <!-- <div class="left"> -->
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('front.home') }}">Home<span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.about') }}">About Us</a>
                            </li>
                            <li class="nav-item drop-down">
                                <a class="nav-link" href="#">Training</a>
                                <ul>
                                    <li><a href="{{ route('front.board') }}">Board and Train</a></li>
                                    <li><a href=" {{ route('front.private') }}">Private Lessons</a></li>
                                    <li><a href=" {{ route('front.group') }}">Group Training</a></li>
                                    <li><a href=" {{ route('front.summer') }}">Summer Mini Sessions</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.gallery') }}">Graduates</a>
                            </li>
                            <!-- </div> -->
                            <li class="nav-item mx-auto">
                                <a class="nav-link centerLogo" href="{{ route('front.home') }}"><img
                                        src="{{ asset('front/images/logo.webp') }}" class="img-fluid"
                                        alt="img"></a>
                            </li>
                            <!-- <div class="right"> -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.blogs') }}">Blogs and Articles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.faq') }}">FAQs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.contact') }}">Contact Us</a>
                            </li>

                            <!-- </div> -->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ! NAV HEADER -->
