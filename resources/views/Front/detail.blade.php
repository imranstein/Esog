@extends('Front.layouts.app')
@section('title','Detail')
@section('content')
<div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h1 class="display-1 text-dark">{{ $model }} Detail</h1>
                {{-- <div class="pt-2">
                    <a href="" class="btn btn-forth rounded-pill py-2 px-4 mx-2">Home</a>
                    <a href="" class="btn btn-forth rounded-pill py-2 px-4 mx-2">About Us</a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<div class="container-fluid py-6">
    <div class="container py-5">
        <div class="row g-3">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-75 mb-5" src="{{ asset($result->image) }}" alt="">
                    <h1 class="mb-4">{{ $result->title }}</h1>
                    <p>{!! $result->description !!}</p>
                    @if($result->document)
                    <a class="btn btn-sm btn-forth rounded-pill px-3" href="{{ asset('Document/'.$result->document) }}" target="blank">Download</a>
                    @endif

                </div>
                <!-- Blog Detail End -->


            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Category Start -->
                {{-- <div class="mb-5">
                    <h3 class="mb-4">Categories</h3>
                    <div class="d-flex flex-column justify-content-start bg-primary p-4">
                        <a class="h5 mb-4" href="#"><i class="fa fa-angle-right me-2"></i>Web Design</a>
                        <a class="h5 mb-4" href="#"><i class="fa fa-angle-right me-2"></i>Web Development</a>
                        <a class="h5 mb-4" href="#"><i class="fa fa-angle-right me-2"></i>Web Development</a>
                        <a class="h5 mb-4" href="#"><i class="fa fa-angle-right me-2"></i>Keyword Research</a>
                        <a class="h5 mb-0" href="#"><i class="fa fa-angle-right me-2"></i>Email Marketing</a>
                    </div>
                </div> --}}
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="mb-4">Recent Post</h3>
                    <div class="bg-primary p-4">
                        @foreach ($latests as $latest)
                        <div class="d-flex mb-3">
                            <img class="img-fluid" src="{{ asset($latest->image) }}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="/front-detail/{{ $latest->id }}/{{ $model }}" class="h5 d-flex align-items-center bg-white px-3 mb-0">{{ $latest->title }}</a>
                            </a>
                        </div>
                        @endforeach


                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="{{ asset('Front/img/blog-1.jpg') }}" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
</div>



{{-- Service Section --}}

@endsection
