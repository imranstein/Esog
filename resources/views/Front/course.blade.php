@extends('Front.layouts.app')
@section('title','Education')
@section('content')
<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Education</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Education</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->



<section class="mosh-more-services-area d-sm-flex clearfix">
    <div class="container">
        <div class="row">
            @foreach ($courses as $course)

            <div class="single-more-service-area">
                <div class="more-service-content text-center wow fadeInUp" data-wow-delay=".1s">
                    <img src="{{ $course->thumbnail }}" alt="{{ $course->title }}" style="width: 245px; height: 138px;">
                    <h5>{{ $course->title }}</h5>
                    <p>{!! Str::limit($course->description, 100, '...') !!}</p>
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
        {{ $courses->links() }}

    </div>
</section>

@endsection
