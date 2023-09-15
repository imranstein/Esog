@extends('Front.layouts.app')
@section('title','Members')
@section('content')
<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Members</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Members</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>



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
                    <img class="img-fluid w-100" src="{{ $member->photo}}" alt="" />
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
        {{ $members->links() }}

    </div>
</div>
</div>
{{-- Service Section --}}


@endsection
