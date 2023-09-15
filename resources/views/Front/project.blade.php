@extends('Front.layouts.app')
@section('title','Project')
@section('content')
<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Our Projects</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Projects</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->



<section>
    <div class="container py-2">
        <div class="h1 text-center text-dark" id="pageHeaderTitle"></div>
        @forelse ($projects as $project)

        <article class="postcard light blue">
            <div class="postcard__text t-dark">
                <h3 style="color: #60bceb;">{{ Str::limit($project->title, 50, '...') }}</h3>
                <div class="postcard__subtitle small">
                    <time datetime="2020-05-25 12:00:00">
                        <i class="fas fa-calendar-alt mr-2"></i>{{ Carbon\Carbon::parse($project->start_date)->format('m-y') }}
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">{!! Str::limit($project->objective, 200) !!}</div>

                <ul class="postcard__tagbox">

                    <a href="/front-detail/{{ $project->id }}/Project" class="btn mosh-btn mt-50">View all</a>
                </ul>
            </div>
        </article>
        @empty

        @endforelse
    </div>
    {{ $projects->links() }}
</section>


@endsection
