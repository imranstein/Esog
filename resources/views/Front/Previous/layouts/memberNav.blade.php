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

        <div class="container" style="max-width: 1170px;">
            <div class="d-flex align-items-center">

                <div class="mr-auto">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                            {{-- if the route is selected make it active --}}
                            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('front.index') }}" class="nav-link text-left">Home</a></li>
                            <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{ route('dashboard') }}" class="nav-link text-left">Dashboard</a></li>

                            {{-- create a dropdown nav for about --}}
                            <li class="{{ Request::is('myProfile') ? 'active' : '' }}">
                                <a href="/myProfile" class="nav-link text-left">My Profile</a>
                            </li>

                            <li class="{{ Request::is('front-course') ? 'active' : '' }}">
                                <a href="{{ route('front.course') }}" class="nav-link text-left">Course</a>
                            </li>
                            <li class="{{ Request::is('memberCourse') ? 'active' : '' }}">
                                <a href="/memberCourse" class="nav-link text-left">Registered Course</a>
                            </li>
                            <a class="btn btn-primary" href="{{ route('logout') }}">
                                <span>{{ __('Logout') }}</span>
                            </a>

                            {{-- <a href="{{ route('logout') }}" class="btn btn-primary" type="button">
                            Logout
                            </a> --}}
                            @php
                            $member = App\Models\Members::where('user_id', Auth::user()->id)->first();
                            $image = $member->photo;
                            @endphp
                            <a style="margin-left: 15em;align-self: right;">
                                <img class="rounded-circle" src="{{ $image }}" style="height: 30px;width:auto;" alt="">
                                {{ $member->name  }}
                            </a>

                        </ul>



                    </nav>

                </div>

            </div>

        </div>

    </div>
