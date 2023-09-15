@extends('Front.layouts.app')
@section('title','Contact Us')
@section('content')
<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Member Registration</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Member Registration</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** Contact Area Start ***** -->
<section class="contact-area section_padding_100">
    <div class="container">
        <div class="row">
            <!-- Contact Form Area -->
            <div class="col-12">
                <div class="contact-form-area">
                    <h2>Member Registration</h2>
                    <form method="POST" action="{{ route('front.memberRegister') }}" enctype="multipart/form-data">

                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" id="name" name="firstName" placeholder="First Name" value="{{ old('firstName') }}" required>
                                @if ($errors->has('firstName'))
                                <span class="text-danger">{{ $errors->first('firstName') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="email" class="form-control" id="email" placeholder="Last Name" name="lastName" value="{{ old('lastName') }}" required>
                                @if ($errors->has('lastName'))
                                <span class="text-danger">{{ $errors->first('lastName') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="number" class="form-control" id="phone" placeholder="Phone No" name="phone" value="{{ old('phone') }}" required>
                                @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" id="workplace" placeholder="Workplace" name="workplace" value="{{ old('workplace') }}" required>
                                @if ($errors->has('workplace'))
                                <span class="text-danger">{{ $errors->first('workplace') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <input type="file" name="image" class="form-control" required>
                                @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                            <button class="btn mosh-btn mt-50" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Contact Information -->

        </div>
    </div>
</section>

@endsection
