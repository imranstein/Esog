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
                <div class="p-5 m-5 mb-0" style="background-color: rgb(223, 223, 223);">
                    <form method="POST" action="{{ route('front.memberRegister') }}" nctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">

                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-light border-0"  placeholder="Your Name" style="height: 55px;" name="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <input type="number" class="form-control bg-light border-0" placeholder="Your Phone" style="height: 55px;" name="phone" value="{{ old('phone') }}">
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Department" style="height: 55px;" name="department" value="{{ old('department') }}">
                                @if ($errors->has('department'))
                                    <span class="text-danger">{{ $errors->first('department') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Designation" style="height: 55px;" name="designation" value="{{ old('designation') }}">
                                @if ($errors->has('designation'))
                                    <span class="text-danger">{{ $errors->first('designation') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Workplace" style="height: 55px;" name="workplace" value="{{ old('workplace') }}">
                                @if ($errors->has('workplace'))
                                    <span class="text-danger">{{ $errors->first('workplace') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <input type="file" class="form-control bg-light border-0" placeholder="Your Photo" style="height: 55px;" name="photo">
                                @if ($errors->has('photo'))
                                    <span class="text-danger">{{ $errors->first('photo') }}</span>
                                @endif
                            </div>

                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- <div class="col-lg-4">
                <div class="p-5 m-5 mb-0" style="background-color: rgb(223, 223, 223);">
                    <h4>Search For Members</h4>

                    <form method="POST" action="{{ route('member.create') }}">
                        @csrf
                        <div class="row g-3">

                            <div class="col-12">

                                <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;" name="name">
                            </div>
                            {{-- <div class="col-12">
                                <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;" name="email">
                            </div>
                            <div class="col-12">
                                <input type="number" class="form-control bg-light border-0" placeholder="Your Phone" style="height: 55px;" name="phone">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Department" style="height: 55px;" name="department">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Designation" style="height: 55px;" name="designation">
                            </div> --}


                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> --}}

        </div>
    </div>
</div>

@endsection
