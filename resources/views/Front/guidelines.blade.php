@extends('Front.layouts.app')
@section('title','Guidelines')
@section('content')
{{-- <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h1 class="display-1 text-dark">Guidelines</h1>
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
            <h4 class="display-6">Latest Guidelines</h4>
            <hr class="w-25 mx-auto text-primary" style="opacity: 1" />
        </div>
        <div class="container">
            <div class="row">
                @foreach ($guidelines as $guideline)
                <div class="col-lg-4">
                    <div class="card card-margin" id="cards">
                        <div class="card-header no-border">
                            <h5 class="card-title">{{ $guideline->title }}</h5>
                        </div>
                        <div class="card-body pt-0">
                            <div class="widget-49">
                                <div class="widget-49-title-wrapper">
                                    <div class="widget-49-date-primary">
                                        <span class="widget-49-date-day">{{ $guideline->created_at->format('d') }}</span>
                                        <span class="widget-49-date-month">{{ $guideline->created_at->format('M') }}</span>
                                    </div>
                                    <div class="widget-49-meeting-info">
                                        <span class="widget-49-pro-title">{{ $guideline->author }}</span>
                                    </div>

                                </div>

                                <ul class="widget-49-meeting-points">
                                    {{-- guideline content only 100 charachters --}}
                                    <li class="widget-49-meeting-item">{!! Str::limit($guideline->description, 150) !!}</li>
                                </ul>
                                <div class="widget-49-meeting-action">
                                    <a href="/front-detail/{{ $guideline->id }}/Guidelines" class="btn btn-sm btn-flash-border-primary">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
    {{ $guidelines->links() }}

            </div>
        </div>


    </div>
</div>

{{-- Service Section --}}

@endsection
