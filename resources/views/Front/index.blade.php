@extends('Front.layouts.app')
@section('title','Home')
@section('content')
<section class="hero-area">
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <div class="a" style="--n: 5;">
                <div class="dot" style="--i: 0;"></div>
                <div class="dot" style="--i: 1;"></div>
                <div class="dot" style="--i: 2;"></div>
                <div class="dot" style="--i: 3;"></div>
                <div class="dot" style="--i: 4;"></div>
            </div>
        </div>
    </div>

    <div class="hero-post-slides owl-carousel">

        <!-- Single Hero Post -->
        @forelse($sliders as $slider)
        <div class="single-hero-post d-flex flex-wrap">
            <!-- Post Thumbnail -->
            <div class="slide-post-thumbnail h-100 bg-img" style="background-image: url({{ $slider->image }});"></div>
            <!-- Post Content -->
            <div class="slide-post-content h-100 d-flex align-items-center">
                <div class="slide-post-text">
                    <p class="post-date" data-animation="fadeIn" data-delay="100ms">{{ Carbon\Carbon::parse($slider->created_at)->format('M d Y') }}</p>
                    <a href="#" class="post-title" data-animation="fadeIn" data-delay="300ms">
                        <h2>{{ $slider->title }}</h2>
                    </a>
                    <p class="post-excerpt" data-animation="fadeIn" data-delay="500ms">{{ Str::limit($slider->description, 100, '...') }}</p>
                    {{-- <a href="#" class="btn nikki-btn" data-animation="fadeIn" data-delay="700ms">Read More</a> --}}
                </div>
                <!-- Page Count -->
                <div class="page-count"></div>
            </div>
        </div>
        @empty
        @endforelse

    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Blog Content Area Start ##### -->
<section class="blog-content-area section-padding-100">
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
                        <!-- Single Blog Post -->
                        <div class="col-lg-6 mb-3">
                            <div class="card card-margin" id="cards">
                                <div class="card-header no-border">
                                    <h5 class="card-title">{{ Str::limit($latest->title, 20, '...') }}</h5>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="widget-49">
                                        <div class="widget-49-title-wrapper">
                                            <div class="widget-49-date-primary">
                                                <span class="widget-49-date-day">{{ $latest->created_at->format('d') }}</span>
                                                <span class="widget-49-date-month">{{ $latest->created_at->format('M') }}</span>
                                            </div>
                                            <div class="widget-49-meeting-info">
                                                <span class="widget-49-pro-title">{{ $latest->author }}</span>
                                            </div>

                                        </div>

                                        <ul class="widget-49-meeting-points">
                                            {{-- latest content only 100 charachters --}}
                                            <li class="widget-49-meeting-item">{!! Str::limit($latest->content, 130) !!}</li>
                                        </ul>
                                        <div class="widget-49-meeting-action">
                                            <a href="/front-detail/{{ $latest->id }}/Advocacy" class="btn btn-sm btn-flash-border-primary">View All</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        @empty

                        @endforelse

                    </div>
                </div>

                <!-- Pager -->
                {{-- <ol class="nikki-pager">
                    <li><a href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Newer</a></li>
                    <li><a href="#">Older <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                </ol> --}}
            </div>

            <!-- Blog Sidebar Area -->
            <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                <div class="post-sidebar-area">

                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area mb-30">
                        <!-- Title -->
                        <div class="widget-title">
                            <h6>Member Registration</h6>
                        </div>
                        <!-- Thumbnail -->
                        {{-- <div class="about-thumbnail">
                            <img src="img/blog-img/about-me.jpg" alt="">
                        </div> --}}
                        <!-- Content -->
                        <div class="widget-content text-center">
                            <form method="POST" action="{{ route('front.memberRegister') }}" nctype="multipart/form-data">

                                @csrf

                                <div class="form-group" style="margin-top: 10px;">
                                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required>
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group" style="margin-top: 10px;">
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group" style="margin-top: 10px;">
                                    <input type="number" class="form-control" name="phone" placeholder="Phone" value="{{ old('phone') }}" required>
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
                    {{-- <div class="single-widget-area mb-30">
                        <!-- Title -->
                        <div class="widget-title">
                            <h6>Subscribe &amp; Follow</h6>
                        </div>
                        <!-- Widget Social Info -->
                        <div class="widget-social-info text-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                        </div>
                    </div> --}}

                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area mb-30">
                        <!-- Title -->
                        <div class="widget-title">
                            <h6>Current Projects</h6>
                        </div>

                        <!-- Single Latest Posts -->
                        @forelse ($projects as $project)
                        <div class="single-latest-post d-flex">
                            {{-- <div class="post-thumb">
                                <img src="img/blog-img/lp1.jpg" alt="">
                            </div> --}}
                            <div class="post-content">
                                <a href="#" class="post-title">
                                    <h6>{{ $project->title }}</h6>
                                </a>
                                <p class="post-desc">{{ Str::limit($service->description, 60, '...') }}</p>
                                <a href="#" class="post-author"><span>funded by</span> {{ $project->funded_by }}</a>
                            </div>
                        </div>
                        @empty

                        @endforelse
                        <!-- Single Latest Posts -->
                        {{-- <div class="single-latest-post d-flex">
                            <div class="post-thumb">
                                <img src="img/blog-img/lp2.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">
                                    <h6>Why I Decided to Give up My Favorite Foods and Go Vegan</h6>
                                </a>
                                <a href="#" class="post-author"><span>by</span> Colorlib</a>
                            </div>
                        </div>

                        <!-- Single Latest Posts -->
                        <div class="single-latest-post d-flex">
                            <div class="post-thumb">
                                <img src="img/blog-img/lp3.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">
                                    <h6>The 10 Most Instagrammable Spots in San Diego</h6>
                                </a>
                                <a href="#" class="post-author"><span>by</span> Colorlib</a>
                            </div>
                        </div>

                        <!-- Single Latest Posts -->
                        <div class="single-latest-post d-flex">
                            <div class="post-thumb">
                                <img src="img/blog-img/lp4.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">
                                    <h6>5 Things to Know About Dating a Bisexual</h6>
                                </a>
                                <a href="#" class="post-author"><span>by</span> Colorlib</a>
                            </div>
                        </div>

                        <!-- Single Latest Posts -->
                        <div class="single-latest-post d-flex">
                            <div class="post-thumb">
                                <img src="img/blog-img/lp5.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">
                                    <h6>How to Take Critical Feedback at Work (Like a Boss)</h6>
                                </a>
                                <a href="#" class="post-author"><span>by</span> Colorlib</a>
                            </div>
                        </div> --}}

                    </div>

                    <!-- ##### Single Widget Area ##### -->
                    {{-- <div class="single-widget-area mb-30">
                        <!-- Adds -->
                        <a href="#"><img src="{{ asset('Front/new/img/blog-img/add.png') }}" alt=""></a>
                </div> --}}

                <!-- ##### Single Widget Area ##### -->
                {{-- <div class="single-widget-area mb-30">
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

                    <!-- ##### Single Widget Area ##### -->
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
