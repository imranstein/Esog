@extends('Front.layouts.app')
@section('title','The Team')
@section('content')
<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Our Team</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Meet Our Incredible Team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hero End -->


<!-- Team Start -->
<section class="mosh-team-area section_padding_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="section-heading text-center">
                    <p>Clients</p>
                    <h2>Meet Our Executives</h2>
                    <h5 class="mt-30">Est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. </h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="mosh-team-slides owl-carousel">
                    <!-- Single Team Slide -->
                    @foreach ($executives as $team)

                    <div class="single-team-slide text-center">
                        <!-- Thumbnail -->
                        <div class="team-thumbnail">
                            <img src="{{ $team->image}}" alt="">
                        </div>
                        <!-- Meta Info -->
                        <div class="team-meta-info">
                            <h4>{{ $team->name }}</h4>
                            <span>{{ $team->designation }}</span>
                            <a href="mailto:{{ $team->email }}">{{ $team->email }}</a>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            {{-- <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a> --}}
                            <a href="/{{ $team->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="/{{ $team->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="/{{ $team->linkedin }}"><i class="fa fa-linkedin-in" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>


{{-- Service Section --}}
<section class="mosh-team-area section_padding_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="section-heading text-center">
                    <p>Clients</p>
                    <h2>Meet Our Staff</h2>
                    <h5 class="mt-30">Est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. </h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="mosh-team-slides owl-carousel">
                    <!-- Single Team Slide -->
                    @foreach ($staffs as $team)


                    <div class="single-team-slide text-center">
                        <!-- Thumbnail -->
                        <div class="team-thumbnail">
                            <img src="{{ $team->image}}" alt="">
                        </div>
                        <!-- Meta Info -->
                        <div class="team-meta-info">
                            <h4>{{ $team->name }}</h4>
                            <span>{{ $team->designation }}</span>
                            <a href="mailto:{{ $team->email }}">{{ $team->email }}</a>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            {{-- <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a> --}}
                            <a href="/{{ $team->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="/{{ $team->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="/{{ $team->linkedin }}"><i class="fa fa-linkedin-in" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>


@endsection
