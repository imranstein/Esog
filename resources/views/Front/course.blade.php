@extends('Front.layouts.app')
@section('title','Education')
@section('content')
{{-- <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h1 class="display-1 text-dark">Advocacies</h1>
                {{-- <div class="pt-2">
                    <a href="" class="btn btn-forth rounded-pill py-2 px-4 mx-2">Home</a>
                    <a href="" class="btn btn-forth rounded-pill py-2 px-4 mx-2">About Us</a>
                </div> --}
            </div>
        </div>
    </div>
</div> --}}
<!-- Hero End -->


<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
            <h4 class="display-6">Education</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1" />
        </div>
        <div class="container">
            <div class="row">
                @foreach ($courses as $course)
                <div class="col-md-4 col-lg-4 pb-3">

                    <div class="card card-custom bg-white border-white border-0" style="height: 350px">
                        <div class="card-custom-img" style="background-image: url({{ $course->thumbnail }});"></div>
                        <div class="card-custom-avatar">
                            @if(Auth::check() && Auth::user()->roles[0]->name == 'Member')
                            @php
                            $memberId = App\Models\Members::where('user_id',Auth::user()->id)->first()->id;
                            $enrolled = App\Models\MemberCourse::where('course_id',$course->id)->where('member_id',$memberId)->first();
                            @endphp
                            @if ($enrolled == null)
                            <a href="{{ route('course.enroll',$course->id) }}">
                                <img class="img-fluid" src="{{ asset('Front/assets/img/enroll.png') }}" alt="Avatar" />
                            </a>
                            @elseif($enrolled != null && $enrolled->started_at == null)
                            <a href="{{ route('startCourse',$enrolled->id) }}">
                                <img class="img-fluid" src="{{ asset('Front/assets/img/play-button.png') }}" alt="Avatar" />
                            </a>
                            @elseif($enrolled != null && $enrolled->started_at != null && $enrolled->finished_at == null)
                            <a href="{{ route('memberCourse.show',$enrolled->id) }}">
                                <img class="img-fluid" src="{{ asset('Front/assets/img/yellow play.png') }}" alt="Avatar" />
                            </a>
                            @elseif($enrolled != null && $enrolled->finished_at != null)
                            <a href="{{ route('memberCourse.show',$enrolled->id) }}">
                                <img class="img-fluid" src="{{ asset('Front/assets/img/restart.png') }}" alt="Avatar" />
                            </a>
                            @endif
                            @else
                            <a href="{{ route('dashboard') }}">
                                <img class="img-fluid" src="{{ asset('Front/assets/img/enroll.png') }}" alt="Avatar" />
                            </a>
                            @endif

                        </div>
                        <div class="card-body" style="overflow-y: auto">
                            <h4 class="card-title">{{ $course->title }}</h4>
                            <h6 class="card-title">{{ $course->author }}</h6>
                            <p class="card-text">{!! Str::limit($course->description, 100, '...') !!}</p>
                        </div>

                    </div>

                </div>

                @endforeach

            </div>
            {{ $courses->links() }}

        </div>
    </div>

</div>

{{-- Service Section --}}

@endsection
