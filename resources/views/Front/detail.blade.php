@extends('Front.layouts.app')
@section('title','Detail')
@section('content')
<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>{{ $result->title }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">The {{ $model }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** Blog Area Start ***** -->
<section class="blog-area section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="mosh-blog-posts">
                    <div class="row">
                        <!-- Single Blog Start -->
                        <div class="col-12">
                            <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                                <!-- Post Thumb -->
                                @if($result->image)
                                <div class="blog-post-thumb">
                                    <img src="{{ asset($result->image) }}" alt="">
                                </div>
                                @elseif($result->video)
                                <div class="blog-post-thumb">
                                    <iframe width="100%" height="400" src="{{ $result->video }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                @endif
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <h6>
                                        @if($result->author)
                                        By <a href="#">{{ $result->author }},</a>
                                        @endif
                                        <a href="#">{{ Carbon\Carbon::parse($result->created_at)->format('M d, Y') }}</a></h6>
                                </div>
                                <!-- Post Title -->
                                @if($model == 'Project')
                                <h4>{{ $result->title }}</h4>
                                @else
                                <h2>{{ $result->title }}</h2>
                                @endif
                                <!-- Post Excerpt -->
                                @if($result->description)
                                <p>{!! $result->description !!}</p>
                                @elseif ($result->content)
                                <p>{!! $result->content !!}</p>
                                @endif

                                @if($result->objective)
                                <div class="post-text">
                                    <h4>Objective</h4>
                                    <p>{!! $result->objective !!}</p>
                                </div>
                                @endif
                                @if($result->funded_by)
                                <div class="post-text">
                                    <h4>Funded By</h4>
                                    <p>{!! $result->funded_by !!}</p>
                                </div>
                                @endif
                                @if($result->start_date || $result->end_date)
                                <div class="post-text">
                                    <h4>Duration</h4>
                                    <p>{{ Carbon\Carbon::parse($result->start_date)->format('M d, Y') }} - {{ Carbon\Carbon::parse($result->end_date)->format('M d, Y') }}</p>
                                </div>
                                @endif
                                @if($result->sites)
                                <div class="post-text">
                                    <h4>Sites</h4>
                                    <p>{!! $result->sites !!}</p>
                                </div>
                                @endif

                                @if($result->document)
                                <div class="nikki-list-area mb-50">
                                    <h4 class="mb-15">Documents</h4>
                                    <ul class="nikki-list">
                                        <li> <a class="btn btn-info btn-forth rounded-pill px-3" href="{{ asset($result->document) }}" target="blank">View Document</a></li>
                                    </ul>
                                </div>
                                @endif

                                <!-- Read More btn -->
                            </div>
                        </div>


                    </div>
                </div>
                <!-- Pagination Area Start -->

            </div>
            @if($model != "Course")

            <div class="col-12 col-md-4">
                <div class="mosh-blog-sidebar">



                    <div class="latest-blog-posts mb-100">
                        <h5>Latest Posts</h5>
                        <!-- Single Latest Blog Post -->
                        @forelse($latests as $latest)
                        <div class="single-latest-blog-post d-flex">
                            <div class="latest-blog-post-thumb">
                                <img src="{{ asset($latest->image) }}" alt="">
                            </div>
                            <div class="latest-blog-post-content">
                                <h6><a href="/front-detail/{{ $latest->id }}/{{ $model }}">{{ Str::limit($latest->title, 24, '...') }}</a></h6>
                                <div class="post-meta">
                                    <h6><a href="/front-detail/{{ $latest->id }}/{{ $model }}">{{ Carbon\Carbon::parse($result->created_at)->format('M d, Y') }}</a></h6>

                                </div>
                            </div>
                        </div>
                        @empty
                        @endforelse


                    </div>


                </div>
            </div>
            @endif
        </div>
    </div>
</section>

{{-- Service Section --}}

@endsection
