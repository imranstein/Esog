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
                                        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                                        {{-- <li class="nav-item"><a class="nav-link" href="/myProfile">My Profile</a></li> --}}
                                        <li class="nav-item"><a class="nav-link" href="{{ route('front.course') }}">Course</a></li>
                                        <li class="nav-item"><a class="nav-link" href="/memberCourse">Enrolled Course</a></li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="moshDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Payment</a>
                                            <div class="dropdown-menu" aria-labelledby="moshDropdown">
                                                <a class="dropdown-item" href="{{ route('memberYearly') }}" class="nav-link text-left">Subscription</a>
                                                <a class="dropdown-item" href="{{ route('memberPay') }}" class="nav-link text-left">LifeTime Payment</a>
                                                <a class="dropdown-item" href="{{ route('coursePay') }}" class="nav-link text-left">Course</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="moshDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Certificate</a>
                                            <div class="dropdown-menu" aria-labelledby="moshDropdown">
                                                <a class="dropdown-item" href="/certificateGenerate" class="nav-link text-left">Generate</a>
                                                <a class="dropdown-item" href="/certificateHistory" class="nav-link text-left">History</a>
                                            </div>
                                        </li>
                                        {{-- <a class="btn btn-primary" style="background-color: #86b7e2;" href="{{ route('logout') }}">
                                        <span>{{ __('Logout') }}</span>
                                        </a> --}}
                                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Logout</a></li>

                                    </ul>

                                    <!-- Search btn -->
                                    <div qq="search-button">
                                        @php
                                        $member = App\Models\Members::where('user_id', Auth::user()->id)->first();
                                        $image = $member->photo;
                                        @endphp
                                        <a href="/myProfile" style="margin-left: 2em;align-self: right;">

                                            <img class="rounded-circle" src="/{{ $image }}" style="height: 30px;width:auto;" alt="">
                                            {{ $member->name  }}
                                        </a>

                                    </div>
                                    <!-- Login/Register btn -->

                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
