@extends('Front.layouts.app')
@section('title','Members')
@section('content')
{{-- <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h1 class="display-1 text-dark">The Team</h1>
                {{-- <div class="pt-2">
                    <a href="" class="btn btn-forth rounded-pill py-2 px-4 mx-2">Home</a>
                    <a href="" class="btn btn-forth rounded-pill py-2 px-4 mx-2">About Us</a>
                </div> --}
            </div>
        </div>
    </div>
</div> --}}
<!-- Hero End -->


<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
            <h4 class="display-6"> Our Members</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1" />
        </div>
        <div class="row g-3">
            @foreach ($members as $member)

            <div class="col-lg-4 col-md-6">
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{ $member->image}}" alt="" />
                    <div class="team-text">
                        {{-- <div class="team-social">
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="/{{ $member->twitter }}"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="/{{ $member->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="/{{ $member->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                        </div> --}}
                        <div class="mt-auto mb-2">
                            <h4 class="mb-1">{{ $member->name }}</h4>
                            <span class="text-uppercase">{{ $member->designation }}</span>
                            <span class="text-uppercase">{{ $member->email }}</span>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{-- Service Section --}}


@endsection
