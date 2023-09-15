    <header class="header_area clearfix">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <!-- Menu Area Start -->
                <div class="col-12 h-100">
                    <div class="menu_area h-100">
                        <nav class="navbar h-100 navbar-expand-lg align-items-center">
                            <!-- Logo -->
                            <a class="navbar-brand" href="{{ route('front.index') }}"><img src="{{ asset('Front/img/clients-img/logo.png')}}" alt="logo" style="width: 100px;"></a>

                            <!-- Menu Area -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mosh-navbar" aria-controls="mosh-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse justify-content-end" id="mosh-navbar">
                                <ul class="navbar-nav animated" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="{{ route('front.index') }}">Home</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="moshDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About us</a>
                                        <div class="dropdown-menu" aria-labelledby="moshDropdown">
                                            <a class="dropdown-item" href="{{ route('front.about') }}">About Us</a>
                                            <a class="dropdown-item" href="{{ route('front.team') }}">Team</a>
                                            <a class="dropdown-item" href="{{ route('front.project') }}">Projects</a>
                                            <a class="dropdown-item" href="{{ route('front.conference') }}">Annual Conference</a>
                                            <a class="dropdown-item" href="{{ route('front.partner') }}">Partners</a>

                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('front.news') }}">News</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="moshDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Resource</a>
                                        <div class="dropdown-menu" aria-labelledby="moshDropdown">
                                            <a class="dropdown-item" href="https://ejrh.org/index.php/ejrh">Publications</a>
                                            <a class="dropdown-item" href="{{ route('front.guidelines') }}">guidelines</a>
                                            <a class="dropdown-item" href="{{ route('front.advocacy') }}">Advocacy</a>
                                            <a class="dropdown-item" href="{{ route('front.course') }}">Education</a>
                                            <a class="dropdown-item" href="{{ route('front.strategy') }}">Strategic plan</a>
                                            <a class="dropdown-item" href="{{ route('front.constitution') }}">Constitution</a>

                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="moshDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">members</a>
                                        <div class="dropdown-menu" aria-labelledby="moshDropdown">
                                            <a class="dropdown-item" href="{{ route('front.member.create') }}">Become a Member</a>
                                            <a class="dropdown-item" href="{{ route('front.membershipType') }}">Membership Type</a>

                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('front.contact') }}">Contact</a></li>
                                </ul>
                                <!-- Search Form Area Start -->
                                <div class="search-form-area animated">
                                    <form action="#" method="post">
                                        <input type="search" name="search" id="search" placeholder="Type keywords &amp; hit enter">
                                        <button type="submit" class="d-none"><img src="{{ asset('Front/img/core-img/search-icon.png')}}" alt="Search"></button>
                                    </form>
                                </div>
                                <!-- Search btn -->
                                <div qq="search-button">
                                    <a href="#" id="search-btn"><img src="{{ asset('Front/img/core-img/search-icon.png')}}" alt="Search"></a>
                                </div>
                                <!-- Login/Register btn -->
                                <div class="login-register-btn">
                                    @if(Auth::check() && Auth::user()->roles[0]->name == 'Member')
                                    <a href="{{ route('dashboard') }}" class="nav-link text-left">
                                        {{ Auth::user()->name }}
                                    </a>
                                    @else

                                    <a href="{{ route('dashboard') }}">Login</a>
                                    @endif
                                    <a href="{{ route('front.member.create') }}">/ Register</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
