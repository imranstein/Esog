{{-- @extends('layouts.app', ['activePage' => 'user', 'titlePage' => __('User')])

@section('content')
 --}}
@section('title',$course->title)
<x-app-layout>
    <div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @if($course->video)
                    <div class="col-md-6">
                        {{-- video --}}
                        <video width="100%" height="100%" controls>
                            <source src="{{ asset('storage/'.$course->video) }}" type="video/mp4">
                            <source src="{{ asset('storage/'.$course->video) }}" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    @endif
                    <div class="col-md-6">
                        <p>{!! $course->description !!}</p>
                    </div>
                </div>
                <div class="row">
                    {{-- download for document or open on a new tab --}}
                    <div class="col-md-6">
                        @if($course->document)
                        <div class="col-md-3">
                            <a href="{{ asset($course->document) }}" target="_blank" class="btn btn-primary">Download Document</a>
                        </div>
                        @endif
                        <div class="col-md-3">
                            <a href="{{ route('finishCourse',$course->id) }}" class="btn btn-primary">Finish Course</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</x-app-layout>
{{-- @endsection --}}
