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
                <div class="col-lg-4">
                    <div class="card card-margin" id="cards">
                        <div class="card-header no-border">
                            <h5 class="card-title">{{ Str::limit($course->title, 25, '...') }}</h5>
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
                                    <li class="widget-49-meeting-item">{!! Str::limit($course->description, 150) !!}</li>
                                </ul>
                                <div class="widget-49-meeting-action">
                                    @if($course->is_paid == 0)
                                    <a href="/front-detail/{{ $course->id }}/Course" class="btn btn-sm btn-flash-border-primary">View All</a>
                                    @elseif($course->is_paid == 1)
                                    <a href="{{ route('front.member.create') }}" class="btn btn-sm btn-flash-border-primary">View All</a>
                                    @endif
                                </div>
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

{{-- Service Section --}}

@endsection
