@extends('Front.layouts.memberApp')
@section('content')

<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Registered Courses</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Registered Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
            <h4 class="display-6">Registered Courses</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1" />
        </div>
        <div class="container">
            <div class="row">
                @foreach ($memberCourses as $course)

<div class="col-md-4 col-lg-4 pb-3">

    <div class="card card-custom bg-white border-white border-0" style="height: 350px">
        <div class="card-custom-img" style="background-image: url({{ $course->course->thumbnail }});"></div>
<div class="card-custom-avatar">
    @if($course->started_at == null)
    <a href="{{ route('startCourse',$course->id) }}">
        <img class="img-fluid" src="{{ asset('Front/assets/img/play-button.png') }}" alt="Avatar" />
    </a>
    @elseif($course->started_at != null && $course->finished_at == null)
    <a href="{{ route('memberCourse.show',$course->id) }}">
        <img class="img-fluid" src="{{ asset('Front/assets/img/yellow play.png') }}" alt="Avatar" />
    </a>
    @elseif($course->finished_at != null)
    <a href="{{ route('memberCourse.show',$course->id) }}">
        <img class="img-fluid" src="{{ asset('Front/assets/img/restart.png') }}" alt="Avatar" />
    </a>
    @endif

</div>
<div class="card-body" style="overflow-y: auto">
    <h4 class="card-title">{{ $course->course->title }}</h4>
    <h6 class="card-title">{{ $course->course->author }}</h6>
    <p class="card-text">{!! Str::limit($course->course->description, 100, '...') !!}</p>
</div>

</div>
</div>
@endforeach

</div>
{{ $memberCourses->links() }}

</div>
</div>

</div> --}}

<!-- ***** Breadcumb Area End ***** -->



<section class="mosh-more-services-area d-sm-flex clearfix">
    <div class="container">
        <div class="row">
            @foreach ($memberCourses as $course)

            <div class="single-more-service-area">
                <div class="more-service-content text-center wow fadeInUp" data-wow-delay=".1s">
                    <img src="{{ $course->course->thumbnail }}" alt="{{ $course->title }}" style="width: 245px; height: 138px;">
                    <h5>{{ $course->course->title }}</h5>
                    <p>{!! Str::limit($course->course->description, 100, '...') !!}</p>
                    @if(Auth::check() && Auth::user()->roles[0]->name == 'Member')
                    @php
                    $memberId = App\Models\Members::where('user_id',Auth::user()->id)->first()->id;
                    $enrolled = App\Models\MemberCourse::where('course_id',$course->id)->where('member_id',$memberId)->first();
                    @endphp
                    @if ($enrolled == null)
                    <a href="{{ route('course.enroll',$course->id) }}">
                        <button class="btn mosh-btn mt-50" type="submit">Enroll now</button>
                    </a>
                    @elseif($enrolled != null && $enrolled->started_at == null)
                    <a href="{{ route('startCourse',$enrolled->id) }}">
                        <button class="btn mosh-btn mt-50" type="submit">Start now</button>
                    </a>
                    @elseif($enrolled != null && $enrolled->started_at != null && $enrolled->finished_at == null)
                    <a href="{{ route('memberCourse.show',$enrolled->id) }}">
                        <button class="btn mosh-btn mt-50" type="submit">Continue</button>
                    </a>
                    @elseif($enrolled != null && $enrolled->finished_at != null)
                    <a href="{{ route('memberCourse.show',$enrolled->id) }}">
                        <button class="btn mosh-btn mt-50" type="submit">Restart</button>
                    </a>
                    @endif
                    @else
                    <a href="{{ route('dashboard') }}">
                        <button class="btn mosh-btn mt-50" type="submit">Enroll now</button>
                    </a>
                    @endif

                </div>
            </div>

            @endforeach

        </div>
        {{ $memberCourses->links() }}

    </div>
</section>



@endsection
