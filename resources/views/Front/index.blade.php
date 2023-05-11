@extends('Front.layouts.app')
@section('title','Home')
@section('content')
<section class="hero-area">
    <!-- Preloader -->
    {{-- <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <div class="a" style="--n: 5;">
                <div class="dot" style="--i: 0;"></div>
                <div class="dot" style="--i: 1;"></div>
                <div class="dot" style="--i: 2;"></div>
                <div class="dot" style="--i: 3;"></div>
                <div class="dot" style="--i: 4;"></div>
            </div>
        </div>
    </div> --}}

    <div class="hero-post-slides owl-carousel">

        <!-- Single Hero Post -->
        @forelse($news as $slider)
        <div class="single-hero-post d-flex flex-wrap">
            <!-- Post Thumbnail -->
            <a class="slide-post-thumbnail h-100 bg-img" href="/front-detail/{{ $slider->id }}/News">
                <div style="background-image: url({{ $slider->image }});background-repeat:no-repeat;background-size:contain;background-position:center;height:570px !important;width:auto;"></div>
            </a>

            <!-- Post Content -->
            <div class="slide-post-content h-100 d-flex align-items-center">
                <div class="slide-post-text mb-6" style="margin-top: -30%;">
                    <p class="post-date" data-animation="fadeIn" data-delay="100ms">{{ Carbon\Carbon::parse($slider->created_at)->format('M d Y') }}</p>
                    <a href="/front-detail/{{ $slider->id }}/News" class="post-title" data-animation="fadeIn" data-delay="300ms">
                        <h2>{{ $slider->title }}</h2>
                    </a>
                    <p class="post-excerpt" data-animation="fadeIn" data-delay="500ms">{!! Str::limit($slider->description, 100, '...') !!}</p>
                    <a href="/front-detail/{{ $slider->id }}/News" class="btn nikki-btn" data-animation="fadeIn" data-delay="700ms">Read More</a>
                </div>
                <!-- Page Count -->
                <div class="page-count"></div>
            </div>
        </div>
        @empty
        @endforelse

    </div>
</section>
{{-- <section class="hero-area mt-2">


  <div id="wowslider-container1">
    <div class="ws_images">
        <ul>
            @forelse($news as $item)
            <li><img src="{{ $item->image }}" alt="{{ $item->title }}" title="{{ $item->title }}" id="wows1_0" /><a href="/front-detail/{{ $item->id }}/News">{!! Str::limit($item->description, 100, '...') !!}</a></li>
@empty
@endforelse
</ul>
</div>
<div class="ws_bullets">
    <div>
        @forelse($news as $item)
        <a href="#" title="{{ $item->title }}"><span><img src="{{ $item->image }}" alt="{{ $item->title }}" />1</span></a>
        @empty
        @endforelse
    </div>
</div>
</div>

</section> --}}

<!-- ##### Hero Area End ##### -->

<!-- ##### Blog Content Area Start ##### -->
<section class="blog-content-area" style="margin-top: 30px;">
    <div class="container">

        <div class="row justify-content-center">
            <!-- Blog Posts Area -->
            {{-- title --}}

            <div class="col-12 col-lg-8">
                <div class="blog-posts-area">
                    <div class="row">
                        {{-- title  --}}
                        <div class="col-12">
                            <div class="section-heading">
                                <h3>Latest Education</h3>
                            </div>
                        </div>
                        @forelse($latests as $latest)

                        <div class="col-md-6 col-lg-6 pb-3">

                            <div class="card card-custom bg-white border-white border-0" style="height: 350px">
                                <div class="card-custom-img" style="background-image: url({{ $latest->thumbnail }});"></div>
                                <div class="card-custom-avatar">
                                    @if(Auth::check() && Auth::user()->roles[0]->name == 'Member')
                                    @php
                                    $memberId = App\Models\Members::where('user_id',Auth::user()->id)->first()->id;
                                    $enrolled = App\Models\MemberCourse::where('course_id',$latest->id)->where('member_id',$memberId)->first();
                                    @endphp
                                    @if ($enrolled == null)
                                    <a href="{{ route('course.enroll',$latest->id) }}">
                                        <img class="img-fluid" src="{{ asset('Front/assets/img/enroll.png') }}" alt="Avatar" />
                                    </a>
                                    @elseif($enrolled != null && $enrolled->started_at == null)
                                    <a href="{{ route('startCourse',$enrolled->id) }}">
                                        <img class="img-fluid" src="{{ asset('Front/assets/img/play-button.png') }}" alt="Avatar" />
                                    </a>
                                    @elseif($enrolled != null && $enrolled->started_at != null && $enrolled->finished_at == null)
                                    <a href="{{ route('memberCourse.show',$enrolled->id) }}">
                                        <img class="img-fluid" src="{{ asset('Front/assets/img/yellow play.png') }}" alt="Avatar" />
                                    </a>
                                    @elseif($enrolled != null && $enrolled->finished_at != null)
                                    <a href="{{ route('memberCourse.show',$enrolled->id) }}">
                                        <img class="img-fluid" src="{{ asset('Front/assets/img/restart.png') }}" alt="Avatar" />
                                    </a>
                                    @endif
                                    @else
                                    <a href="{{ route('dashboard') }}">
                                        <img class="img-fluid" src="{{ asset('Front/assets/img/enroll.png') }}" alt="Avatar" />
                                    </a>
                                    @endif
                                </div>
                                <div class="card-body" style="overflow-y: auto">
                                    <h4 class="card-title">{{ $latest->title }}</h4>
                                    <h6 class="card-title">By {{ $latest->author }}</h6>
                                    {{-- <p class="card-text">{!! Str::limit($latest->description, 100, '...') !!}</p> --}}
                                </div>

                            </div>

                        </div>

                        @empty

                        @endforelse

                    </div>
                </div>
            </div>

            <!-- Blog Sidebar Area -->
            <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                <div class="post-sidebar-area">

                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area mb-30">
                        <!-- Title -->
                        {{-- <div class="widget-title">
                                                    <h6>Member Registration</h6>
                                                </div> --}}
                        <div class="col-12">
                            <div class="widget-title">
                                <h6>Member Registration</h6>
                            </div>
                        </div>

                        <!-- Thumbnail -->
                        {{-- <div class="about-thumbnail">
                            <img src="img/blog-img/about-me.jpg" alt="">
                        </div> --}}
                        <!-- Content -->
                        <div class="widget-content text-center">
                            <form method="POST" action="{{ route('front.memberRegister') }}" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group" style="margin-top: 10px;">
                                    <input type="text" class="form-control" name="firstName" placeholder="First Name" value="{{ old('firstName') }}" required>
                                    @if ($errors->has('firstName'))
                                    <span class="text-danger">{{ $errors->first('firstName') }}</span>
                                    @endif
                                </div>
                                <div class="form-group" style="margin-top: 10px;">
                                    <input type="text" class="form-control" name="lastName" placeholder="Last Name" value="{{ old('lastName') }}" required>
                                    @if ($errors->has('lastName'))
                                    <span class="text-danger">{{ $errors->first('lastName') }}</span>
                                    @endif
                                </div>

                                <div class="form-group" style="margin-top: 10px;">
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group" style="margin-top: 10px;">
                                    <input type="number" class="form-control" name="phone" placeholder="Phone " value="{{ old('phone') }}" required>
                                    @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>

                                <div class="form-group" style="margin-top: 10px;">
                                    <input type="text" class="form-control" name="workplace" placeholder="Workplace" value="{{ old('workplace') }}" required>
                                    @if ($errors->has('workplace'))
                                    <span class="text-danger">{{ $errors->first('workplace') }}</span>
                                    @endif
                                </div>
                                <div style="margin-top: 10px;">
                                    <input type="file" name="image" class="form-control" required>
                                    @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <button type="submit" class="btn nikki-btn mt-15">Register</button>


                            </form>
                        </div>
                    </div>

                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area mb-30">
                        <!-- Title -->
                        <div class="widget-title">
                            <h6>Subscribe &amp; Follow</h6>
                        </div>
                        <!-- Widget Social Info -->
                        <div class="widget-social-info text-center">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-rss"></i></a>
                        </div>
                    </div>

                    <!-- ##### Single Widget Area ##### -->
                    {{-- <div class="single-widget-area mb-30">

                <!-- Title -->
                 <div class="widget-title">
                                                    <h6>Current Projects</h6>
                                                </div> --}}
                    {{-- <div class="col-12">
                    <div class="section-heading">
                        <h3>Current Projects</h3>
                    </div>
                </div>

                @forelse ($projects as $project)
                <div class="single-latest-post d-flex">

                    <div class="post-content">
                        <div class="card">
                            <div class="card-header">
                                <a href="/front-detail/{{ $project->id }}/Project" class="post-title">
                    <h6>{{ Str::limit($project->title,60, '...') }}</h6>
                    </a </div>
                    <div class="card-body">
                        <p class="post-desc">{!! Str::limit($project->objective, 100, '...') !!}</p>
                        <a class="post-author"><span>funded by</span> {{ $project->funded_by }}</a>
                    </div>
                </div>
            </div>
        </div>
        @empty

        @endforelse


    </div> --}}

    <!-- ##### Single Widget Area ##### -->
    {{-- <div class="single-widget-area mb-30">
                        <!-- Adds -->
                        <a href="#"><img src="{{ asset('Front/new/img/blog-img/add.png') }}" alt=""></a>
    </div> --}}

    <!-- ##### Single Widget Area ##### -->
    <div class="single-widget-area mb-30">
        <!-- Title -->
        <div class="widget-title">
            <h6>Newsletter</h6>
        </div>
        <!-- Content -->
        <div class="newsletter-content">
            <p>Subscribe our newsletter for get notification about new updates, information discount, etc.</p>
            <form action="#" method="post">
                <input type="email" name="email" class="form-control" placeholder="Your email">
                <button><i class="fa fa-send"></i></button>
            </form>
        </div>
    </div>

    {{-- <!-- ##### Single Widget Area ##### -->

                    <div class="single-widget-area mb-30">
                        <!-- Title -->
                        <div class="widget-title">
                            <h6>popular tags</h6>
                        </div>
                        <!-- Tags -->
                        <ol class="popular-tags d-flex flex-wrap">
                            <li><a href="#">LifeStyle</a></li>
                            <li><a href="#">Sport</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">Yoga</a></li>
                            <li><a href="#">Health Food</a></li>
                            <li><a href="#">Summer Holiday</a></li>
                            <li><a href="#">Supper Food</a></li>
                            <li><a href="#">Life</a></li>
                        </ol>
                    </div> --}}

    </div>
    </div>
    </div>
    </div>
</section>
<!-- ##### Blog Content Area End ##### -->

<!-- ##### Instagram Area Start ##### -->
{{-- <div class="follow-us-instagram">
    <div class="instagram-content d-flex flex-wrap align-items-center">

        <!-- Single Instagram Slide -->
        <div class="single-instagram">
            <img src="img/blog-img/insta1.jpg" alt="">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>

        <!-- Single Instagram Slide -->
        <div class="single-instagram">
            <img src="img/blog-img/insta2.jpg" alt="">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>

        <!-- Single Instagram Slide -->
        <div class="single-instagram">
            <img src="img/blog-img/insta3.jpg" alt="">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>

        <!-- Single Instagram Slide -->
        <div class="single-instagram">
            <img src="img/blog-img/insta4.jpg" alt="">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>

        <!-- Single Instagram Slide -->
        <div class="single-instagram">
            <img src="img/blog-img/insta5.jpg" alt="">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>

        <!-- Single Instagram Slide -->
        <div class="single-instagram">
            <img src="img/blog-img/insta6.jpg" alt="">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>

        <!-- Single Instagram Slide -->
        <div class="single-instagram">
            <img src="img/blog-img/insta7.jpg" alt="">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>

        <!-- Single Instagram Slide -->
        <div class="single-instagram">
            <img src="img/blog-img/insta8.jpg" alt="">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
</div> --}}


@endsection

{{-- <script src="{{ asset('Front/new/js/jquery/jquery-2.2.4.min.js') }}"></script>
<script>
    jQuery(document).ready(function() {

        //Initiate the slider
        initSlider();

        function initSlider() {
            $(".owl-carousel").owlCarousel({
                items: 1
                , loop: true
                , animateOut: 'fadeOut'
                , autoHeight: false
                , autoplay: true
                , autoplayTimeout: 4500
                , autoplayHoverPause: true
                , dots: true
                , lazyLoad: true
                , onDrag: stopSlider
                // onInitialized: startProgressBar,
                // onTranslate: resetProgressBar,
                // onTranslated: startProgressBar
            });
        }

        // When the slider is dragged it will be stopped
        function stopSlider(event) {
            var heroPeepsSlider = $('#myCarousel');
            heroPeepsSlider.trigger('stop.owl.autoplay');
        }

        // Progress Bars
        function startProgressBar() {
            $(".slide-progress").css({
                width: "100%"
                , transition: "width 6000ms"
            });
        }

        function resetProgressBar() {
            $(".slide-progress").css({
                width: 0
                , transition: "width 0s"
            });
        }
    });

    // Add Keyboard Functionality
    jQuery(document).keyup(function(event) {
        var heroPeepsSlider = jQuery("#myCarousel");
        // handle cursor keys
        heroPeepsSlider.trigger('stop.owl.autoplay');
        if (event.keyCode == 37) {
            // go left
            heroPeepsSlider.trigger('prev.owl.carousel');
        } else if (event.keyCode == 39) {
            // go right
            heroPeepsSlider.trigger('next.owl.carousel');
        }
    });

</script>
<script type="text/javascript" src="{{ asset('Front/engine1/wowslider.js')}}"></script>
<script type="text/javascript" src="{{ asset('Front/engine1/script.js')}}"></script> --}}
