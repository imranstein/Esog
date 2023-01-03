@extends('Front.layouts.memberApp')
@section('content')

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
            <h4 class="display-6">Courses</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1" />
        </div>
        <div class="container">
            <div class="row">
                @foreach ($courses as $course)
                <div class="col-lg-4">
                    <div class="card card-margin" id="cards">
                        <div class="card-header no-border">
                            <h5 class="card-title">{!! Str::limit($course->title, 30) !!}</h5>
                        </div>
                        <div class="card-body pt-0">
                            <div class="widget-49">
                                <div class="widget-49-title-wrapper">
                                    <div class="widget-49-date-primary">
                                        <span class="widget-49-date-day">{{ $course->created_at->format('d') }}</span>
                                        <span class="widget-49-date-month">{{ $course->created_at->format('M') }}</span>
                                    </div>
                                    <div class="widget-49-meeting-info">
                                        <span class="widget-49-pro-title">{{ $course->author }}</span>
                                    </div>

                                </div>

                                <ul class="widget-49-meeting-points">
                                    {{-- course content only 100 charachters --}}
                                    <li class="widget-49-meeting-item">{!! Str::limit($course->description, 130) !!}</li>
                                </ul>
                                @php
                                $enrolled = App\Models\MemberCourse::where('course_id',$course->id)->where('member_id',Auth::user()->id)->first();
                                @endphp
                                @if ($enrolled == null)
                                <div class="widget-49-meeting-action">
                                    <a href="{{ route('course.enroll',$course->id) }}" class="btn btn-sm btn-flash-border-primary">Enroll</a>
                                </div>
                                @else
                                <div class="widget-49-meeting-action">
                                    <a class="btn btn-sm btn-flash-border-primary">Enrolled</a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $courses->links() }}

            </div>
        </div>
    </div>

</div>


@endsection
