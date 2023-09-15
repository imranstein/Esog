@extends('Front.layouts.memberApp')
@section('title','Success')
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
                    <h4>{{ $message }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
