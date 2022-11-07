@extends('Front.layouts.app')
@section('title','Advocacies')
@section('content')
<div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h1 class="display-1 text-dark">Advocacies</h1>
                {{-- <div class="pt-2">
                    <a href="" class="btn btn-forth rounded-pill py-2 px-4 mx-2">Home</a>
                    <a href="" class="btn btn-forth rounded-pill py-2 px-4 mx-2">About Us</a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->


<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
            <h1 class="display-5">Advocacy</h1>
            <hr class="w-25 mx-auto text-primary" style="opacity: 1" />
        </div>
        <div class="row g-3">
            @foreach ($advocacies as $advocacy)
            <div class="profile-card-2">
                <a href="/front-detail/{{ $advocacy->id }}/advocacys">

                    <img src="{{ $advocacy->image }}" class="img img-responsive">
                    <div class="profile-name">{{ $advocacy->author }}</div>
                    <div class="profile-username">{{ $advocacy->title }}</div>
                    {{-- created at with diffforhumans form --}}
                    <div class="profile-icons">{{ $advocacy->created_at->diffForHumans() }}</div>
                </a>
            </div>

            @endforeach

        </div>
    </div>
    {{ $advocacies->links() }}

</div>

{{-- Service Section --}}

@endsection
