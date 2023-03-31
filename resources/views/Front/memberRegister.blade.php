@extends('Front.layouts.app')
@section('title','Contact Us')
@section('content')
{{-- <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-4 text-center text-lg-start">
                <h1 class="display-1 text-dark">Member</h1>
                {{-- <div class="pt-2">
                    <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Home</a>
                    <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Contact Us</a>
                </div> --}
            </div>
        </div>
    </div>
</div> --}}
<!-- Hero End -->


<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center position-relative">
            <div class="col-lg-8">
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

            </div>


        </div>
    </div>
</div>

@endsection
