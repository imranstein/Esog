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
                                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    {{-- <li><a href="/myProfile">My Profile</a></li> --}}
                                    <li><a href="{{ route('front.course') }}">Course</a></li>
                                    <li><a href="/memberCourse">Enrolled Course</a></li>
                                    <li>
                                        <a href="#">Payment</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('memberYearly') }}" class="nav-link text-left">Subscription</a></li>
                                            <li><a href="{{ route('memberPay') }}" class="nav-link text-left">LifeTime Payment</a></li>
                                            <li><a href="{{ route('coursePay') }}" class="nav-link text-left">Course</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Certificate</a>
                                        <ul class="dropdown">
                                            <li><a href="certificateGenerate" class="nav-link text-left">Generate</a></li>
                                            <li><a href="/certificateHistory" class="nav-link text-left">History</a></li>
                                        </ul>
                                    </li>

                                    <a class="btn btn-primary" style="background-color: #86b7e2;" href="{{ route('logout') }}">
                                        <span>{{ __('Logout') }}</span>
                                    </a>




                                </ul>


                                <!-- Search Form -->


                                <!-- Social Button -->
                                <div class="top-social-info">
                                    @php
                                    $member = App\Models\Members::where('user_id', Auth::user()->id)->first();
                                    $image = $member->photo;
                                    @endphp
                                    <a href="/myProfile" style="margin-left: 2em;align-self: right;">

                                        <img class="rounded-circle" src="/{{ $image }}" style="height: 30px;width:auto;" alt="">
                                        {{ $member->name  }}
                                    </a>

                                </div>
                                <div class="search-form">
                                    <form action="#" method="get">
                                        <input type="search" name="search" class="form-control" placeholder="Search and hit enter...">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
