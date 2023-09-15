@extends('Front.layouts.app')
@section('title','Home')
@section('content')
<section class="welcome_area clearfix" id="home" style="background-image: url({{ asset('Front/img/bg-img/welcome-bg.png') }})">
    <div class="hero-slides owl-carousel">
        <!-- Single Hero Slides -->
        @forelse($news as $slider)
        <div class="single-hero-slide d-flex align-items-end justify-content-center">
            <div class="hero-slide-content text-center">
                <a href="/front-detail/{{ $slider->id }}/News">
                    <h2>{{ $slider->title }}</h2>
                </a>
                <h4>{!! Str::limit($slider->description, 80, '...') !!}</h4>
                <img class="slide-img" src="{{ $slider->image }}" alt="">
            </div>
        </div>
        @empty
        @endforelse


    </div>
</section>
<!-- ***** Welcome Area End ***** -->

<section class="mosh-more-services-area d-sm-flex clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Latest Education</h2>
                </div>
            </div>
            @forelse($latests as $latest)
            <div class="single-more-service-area">
                <div class="more-service-content text-center wow fadeInUp" data-wow-delay=".1s">
                    <img src="{{ $latest->thumbnail }}" alt="" style="width: 245px; height: 138px;">


                    <h5>{{ $latest->author }}</h5>
                    <p>{{ $latest->title }}</p>
                    @if(Auth::check() && Auth::user()->roles[0]->name == 'Member')
                    @php
                    $memberId = App\Models\Members::where('user_id',Auth::user()->id)->first()->id;
                    $enrolled = App\Models\MemberCourse::where('course_id',$latest->id)->where('member_id',$memberId)->first();
                    @endphp
                    @if ($enrolled == null)
                    <a href="{{ route('course.enroll',$latest->id) }}">
                        <button class="btn mosh-btn mt-50" type="submit">Enroll now</button>
                    </a>
                    @elseif($enrolled != null && $enrolled->started_at == null)
                    <a href="{{ route('startCourse',$enrolled->id) }}">
                        <button class="btn mosh-btn mt-50" type="submit">Start now</button>
                    </a>
                    @elseif($enrolled != null && $enrolled->started_at != null && $enrolled->finished_at == null)
                    <a href="{{ route('memberCourse.show',$enrolled->id) }}">
                        <button class="btn mosh-btn mt-50" type="submit">Continue</button>
                    </a>
                    @elseif($enrolled != null && $enrolled->finished_at != null)
                    <a href="{{ route('memberCourse.show',$enrolled->id) }}">
                        <button class="btn mosh-btn mt-50" type="submit">Review</button>
                    </a>
                    @endif
                    @else
                    <a href="{{ route('dashboard') }}">
                        <button class="btn mosh-btn mt-50" type="submit">Enroll now</button>
                    </a>
                    @endif

                </div>
            </div>
            @empty
            @endforelse

        </div>
    </div>
</section>

<!-- ***** Clients Area Start ***** -->

<!-- ***** Clients Area End ***** -->

<!-- ***** Features Area Start ***** -->
<section class="mosh-features-area section_padding_100 clearfix">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-12 col-md-8">
                <div class="contact-form-area">
                    <h2 style="color: white;">Member Registration</h2>
                    <form method="POST" action="{{ route('front.memberRegister') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="First Name" name="firstName" value="{{ old('firstName') }}" required>
                                @if ($errors->has('firstName'))
                                <span class="text-danger">{{ $errors->first('firstName') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="Last Name" name="lastName" value="{{ old('lastName') }}" required>
                                @if ($errors->has('lastName'))
                                <span class="text-danger">{{ $errors->first('lastName') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="number" class="form-control" id="phone" placeholder="phone number" name="phone" value="{{ old('phone') }}" required>
                                @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" id="workplace" placeholder="Workplace" name="workplace" value="{{ old('workplace') }}" required>
                                @if ($errors->has('workplace'))
                                <span class="text-danger">{{ $errors->first('workplace') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}" required>
                                @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>

                            <button class="btn mosh-btn mt-50" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Thumb -->
    <div class="features-img">
        <img src="{{ asset('Front/img/bg-img/memeber.png') }}" alt="">
    </div>
</section>
<!-- ***** Feature Area End ***** -->

<!-- ***** Service Area Start ***** -->
<section class="mosh-clients-area section_padding_100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Sponsors</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="clients-logo-area d-sm-flex align-items-center justify-content-between">
                    <a href="#"><img src="{{ asset('Front/img/clients-img/1.jpg')}}" alt=""></a>
                    <a href="#"><img src="{{ asset('Front/img/clients-img/2.jpg')}}" alt=""></a>
                    <a href="#"><img src="{{ asset('Front/img/clients-img/3.jpg')}}" alt=""></a>
                    <a href="#"><img src="{{ asset('Front/img/clients-img/4.jpg')}}" alt=""></a>
                    <a href="#"><img src="{{ asset('Front/img/clients-img/5.jpg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Service Area End ***** -->



<!-- ***** CTA Area Start ***** -->
<section class="mosh-subscribe-newsletter-area bg-img bg-overlay-white section_padding_100" style="background-image: url({{ asset('Front/img/bg-img/sub-1.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="subscribe-newsletter-content text-center wow fadeIn" data-wow-delay="0.5s">
                    <h2>Subscribe to our newsletter</h2>
                    <p>Subscribe our newsletter for get notification about new updates, information discount, etc.</p>

                    <form action="#">
                        <input type="email" name="email" id="Email" placeholder="Your e-mail here">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
