<header class="main-header clearfix" data-sticky_header="true">
    <section class="header-wrapper navigation-wrapper">
        <div class="main-top-header clearfix hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-left hidden-sm hidden-xs">
                        <div class="top-bar-social">
                            <a href="#">
                                {{-- <i class="bi bi-facebook"></i> --}}
                                <img src="{{asset('public/front/images/facebook1.png')}}" style="background: #116014;">
                            </a>
                            <a href="#">
                                {{-- <i class="bi bi-instagram"></i> --}}
                                <img src="{{asset('public/front/images/instagram1.png')}}" style="background: #116014;">
                            </a>
                            <a href="#">
                                {{-- <i class="bi bi-twitter"></i> --}}
                                <img src="{{asset('public/front/images/twitter1.png')}}" style="background: #116014;">
                            </a>
                            {{-- <a href="#">
                                <i class="bi bi-linkedin"></i>
                            </a> --}}
                            <a href="#">
                                {{-- <i class="bi bi-youtube"></i> --}}
                                <img src="{{asset('public/front/images/youtube1.png')}}" style="background: #116014;">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 text-right hidden-sm hidden-xs" >
                        <div class="top-bar-link">
                            <a href="tel:+1234567890">
                                <i class="bi bi-telephone icon-container"></i> +91 9234680080
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-top" style="background-color: #d8e12b;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 header-col-logo">
                        <div class="header-logo logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('public/front/images/Ashtak-foundation-horizontal-logo.png') }}" alt="Logo">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-8 hidden-xs">
                        <div class="row">
                            <div class="col-md-6 col-sm-4 info-separotor">
                                <div class="header-icon-box">
                                    <div class="icon-container">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <span class="head-heading">Get In Touch</span>
                                        <span class="head-content">
                                            sahayata@ashtakfoundation.in
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-4 info-separotor">
                                <div class="header-icon-box">
                                    <div class="icon-container">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="text">
                                        <span class="head-heading">Office Address</span>
                                        <span class="head-content">
                                            402, Barwadih Purani Basti Khura Road, Latehar, Jharkhand, 822111
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar navbar-default">
            <div class="container clearfix">
                <div class="navbar-collapse collapse pull-left">
                    <ul class="nav navbar-nav">
                        <li class="drop">
                            <a href="{{ route('home') }}" title="Home Layout 01" class="link-active">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" title="About Us">About Us</a>
                        </li>
                        <li class="drop">
                            <a href="{{ route('events') }}">Events</a>
                        </li>
                        <li class="drop">
                            <a href="{{ route('join') }}">Join Us</a>
                        </li>
                        <li>
                            <a href="{{ route('login1') }}">Login</a>
                        </li>
                        <li class="drop">
                            <a href="{{ route('gallery') }}">Gallery</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-header pull-right">
                    
                    
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-contact ">
                        <ul>
                            <li><a class="btn btn-theme" href="{{ route('donate') }}" title="Donate Now">Donate</a></li>
                            <li>
                                <a href="{{ route('login1') }}" class="hidden-xl hidden-lg hidden-md hidden-xxl" style="color: white">Login</a>
                            </li>
        
                            <li>
                                <a href="{{ route('join') }}" class="hidden-xl hidden-lg hidden-md hidden-xxl" style="color: white">Join Us</a>
                            </li>
        
                            <li>
                                <a href="{{ route('about') }}" class="hidden-xl hidden-lg hidden-md hidden-xxl" style="color: white">About Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
