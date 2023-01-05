    <header class="header-area">
        <!-- Navbar Area -->
        <div class="nikki-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="nikkiNav">

                        <!-- Nav brand -->
                        <a href="{{ route('front.index') }}" class="nav-brand"><img src="{{ asset('Front/img/logo1.png')}}" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul style="padding-top: 1em;">
                                    <li><a href="{{ route('front.index') }}">Home</a></li>
                                    <li><a href="#">About</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('front.about') }}" class="dropdown-item">About Us</a></li>
                                            <li><a href="{{ route('front.team') }}" class="dropdown-item">The Team</a></li>
                                            <li><a href="{{ route('front.project') }}" class="dropdown-item">Projects</a></li>
                                            <li><a href="{{ route('front.conference') }}" class="dropdown-item">Annual Conferences</a></li>
                                            <li><a href="{{ route('front.partner') }}" class="dropdown-item">Partners</a></li>

                                        </ul>
                                    </li>
                                    <li> <a href="{{ route('front.news') }}">News</a></li>

                                    <li>
                                        <a href="#">Resource</a>
                                        <ul class="dropdown">
                                            <li><a href="https://ejrh.org/index.php/ejrh" target="blank">Publication</a></li>
                                            <li><a href="{{ route('front.guidelines') }}" class="nav-link text-left">Guidelines</a></li>
                                            <li><a href="{{ route('front.advocacy') }}" class="nav-link text-left">Advocacy</a></li>
                                            <li><a href="{{ route('front.course') }}" class="nav-link text-left">Education</a></li>
                                            <li><a href="{{ route('front.strategy') }}" class="nav-link-text-left">Strategic Plan</a></li>
                                            <li><a href="{{ route('front.constitution') }}" class="nav-link-text-left">Constitution</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Member</a>
                                        <ul class="dropdown">
                                            <li> <a href="{{ route('front.member.create') }}" class="nav-link text-left">Become A member</a></li>
                                            <li><a href="{{ route('front.membershipType') }}" class="nav-link text-left">Membership Type</a></li>

                                            {{-- <li><a href="{{ route('front.member') }}" class="nav-link text-left">Members</a>
                                    </li> --}}

                                </ul>
                                </li>

                                {{-- <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="archive-blog.html">Archive Blog</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="about-us.html">About</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="typography.html">Typography</a></li>
                                        </ul>
                                    </li> --}}
                                {{-- <li><a href="#">Catagories</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">- Features</a></li>
                                                <li><a href="#">- Food</a></li>
                                                <li><a href="#">- Travel</a></li>
                                                <li><a href="#">- Recipe</a></li>
                                                <li><a href="#">- Bread</a></li>
                                                <li><a href="#">- Breakfast</a></li>
                                                <li><a href="#">- Meat</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">- Features</a></li>
                                                <li><a href="#">- Food</a></li>
                                                <li><a href="#">- Travel</a></li>
                                                <li><a href="#">- Recipe</a></li>
                                                <li><a href="#">- Bread</a></li>
                                                <li><a href="#">- Breakfast</a></li>
                                                <li><a href="#">- Meat</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">- Features</a></li>
                                                <li><a href="#">- Food</a></li>
                                                <li><a href="#">- Travel</a></li>
                                                <li><a href="#">- Recipe</a></li>
                                                <li><a href="#">- Bread</a></li>
                                                <li><a href="#">- Breakfast</a></li>
                                                <li><a href="#">- Meat</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">- Features</a></li>
                                                <li><a href="#">- Food</a></li>
                                                <li><a href="#">- Travel</a></li>
                                                <li><a href="#">- Recipe</a></li>
                                                <li><a href="#">- Bread</a></li>
                                                <li><a href="#">- Breakfast</a></li>
                                                <li><a href="#">- Meat</a></li>
                                            </ul>
                                        </div>
                                    </li> --}}
                                <li><a href="{{ route('front.contact') }}">Contact</a></li>
                                @if(Auth::check() && Auth::user()->roles[0]->name == 'Member')
                                <a href="{{ route('dashboard') }}" class="nav-link text-left">
                                    {{ Auth::user()->name }}
                                </a>
                                @else
                                <a href="{{ route('dashboard') }}" class="btn btn-primary" style="background-color: #86b7e2;" type="button">
                                    Login
                                </a>
                                @endif

                                </ul>


                                <!-- Search Form -->
                                <div class="search-form">
                                    <form action="#" method="get">
                                        <input type="search" name="search" class="form-control" placeholder="Search and hit enter...">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>

                                <!-- Social Button -->
                                <div class="top-social-info">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                    {{-- <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS Feed"><i class="fa fa-rss" aria-hidden="true"></i></a> --}}
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
