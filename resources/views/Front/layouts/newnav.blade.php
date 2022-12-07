<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 d-flex">
                <a href="index.html" class="site-logo">
                    <img src="{{ asset('Front/img/logo1.png')}}" style="height: 100px;width:auto;" alt="">
                </a>

                <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>

            </div>
            <div class="col-12 col-lg-6 ml-auto d-flex">
                <div class="ml-md-auto top-social d-none d-lg-inline-block">
                    <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                    <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                    <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
                </div>
                <form action="#" class="search-form d-inline-block">

                    <div class="d-flex">
                        <input type="email" class="form-control" placeholder="Search...">
                        <button type="submit" class="btn btn-secondary"><span class="icon-search"></span></button>
                    </div>
                </form>


            </div>
            <div class="col-6 d-block d-lg-none text-right">

            </div>
        </div>
    </div>




    <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

        <div class="container" style="max-width: 1370px;">
            <div class="d-flex align-items-center">

                <div class="mr-auto">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                            {{-- if the route is selected make it active --}}
                            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('front.index') }}" class="nav-link text-left">Home</a></li>
                            {{-- create a dropdown nav for about --}}
                            <li class="{{ Request::is('front-about') || Request::is('front-team') ? 'active' : '' }} nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                                <div class="dropdown-menu m-0">
                                    <a href="{{ route('front.about') }}" class="nav-link text-left">About Us</a>
                                    {{-- <a href="detail.html" class="dropdown-item">Blog Detail</a> --}}
                                    <a href="{{ route('front.team') }}" class="nav-link text-left">The Team</a>

                                </div>
                            </li>
                            {{-- <a href="{{ route('front.news') }}" class="nav-item nav-link">News</a>
                            <a href="{{ route('front.publication') }}" class="nav-item nav-link">Publication</a>
                            <a href="{{ route('front.guidelines') }}" class="nav-item nav-link">Guidelines</a>
                            <a href="{{ route('front.advocacy') }}" class="nav-item nav-link">Advocacy</a>
                            <a href="{{ route('front.member') }}" class="nav-item nav-link">Become a Member</a>
                            <a href="{{ route('front.contact') }}" class="nav-item nav-link">Contact</a> --}}
                            <li class="{{ Request::is('front-news') ? 'active' : '' }}">
                                <a href="{{ route('front.news') }}" class="nav-link text-left">What's New</a>
                            </li>
                            <li class="{{ Request::is('front-publication') ? 'active' : '' }}">
                                <a href="{{ route('front.publication') }}" class="nav-link text-left">Publication</a>
                            </li>
                            <li class="{{ Request::is('front-guidelines') ? 'active' : '' }}">
                                <a href="{{ route('front.guidelines') }}" class="nav-link text-left">Guidelines</a>
                            </li>
                            <li class="{{ Request::is('front-advocacy') ? 'active' : '' }}">
                                <a href="{{ route('front.advocacy') }}" class="nav-link text-left">Advocacy</a>
                            </li>
                            <li class="{{ Request::is('front-course') ? 'active' : '' }}">
                                <a href="{{ route('front.course') }}" class="nav-link text-left">Education</a>
                            </li>
                            <li class="{{ Request::is('front-member') ? 'active' : '' }} nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Stay Connected</a>
                                <div class="dropdown-menu m-0">
                                    <a href="{{ route('front.member.create') }}" class="nav-link text-left">Become A member</a>
                                    {{-- <a href="detail.html" class="dropdown-item">Blog Detail</a> --}}
                                    <a href="{{ route('front.member') }}" class="nav-link text-left">Members</a>

                                </div>
                            </li>
                            <li class="{{ Request::is('front-contact') ? 'active' : '' }}">
                                <a href="{{ route('front.contact') }}" class="nav-link text-left">Contact Us</a>
                            </li>

                            <a href="{{ route('dashboard') }}" class="btn btn-primary" type="button" >
                                Login
                            </a>

                        </ul>
                    </nav>

                </div>

            </div>
        </div>

    </div>
