@extends('Front.layouts.app')
@section('title','Detail')
@section('content')
{{-- <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h1 class="display-1 text-dark">{{ $model }} Detail</h1>
{{-- <div class="pt-2">
                    <a href="" class="btn btn-forth rounded-pill py-2 px-4 mx-2">Home</a>
                    <a href="" class="btn btn-forth rounded-pill py-2 px-4 mx-2">About Us</a>
                </div> --}
            </div>
        </div>
    </div>
</div> --}}
<!-- Hero End -->

<section class="blog-content-area section-padding-0-100">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Blog Posts Area -->
            <div class="col-12">

                <!-- Post Details Area -->
                <div class="single-post-details-area">
                    <div class="post-content">

                        <div class="text-center mb-50">
                            <p class="post-date">{{ Carbon\Carbon::parse($result->created_at)->format('M d, Y') }}</p>
                            {{-- check if the length of the title is bigger thatn 40 --}}
                            @if($model == 'Project')
                            <h4 class="post-title" style="font-size: 28px;">{{ $result->title }}</h4>
                            @else
                            <h2 class="post-title">{{ $result->title }}</h2>
                            @endif
                            <!-- Post Meta -->
                            @if($result->author)
                            <div class="post-meta">
                                <a href="#"><span>by</span> {{ $result->author }}</a>
                            </div>
                            @endif
                        </div>

                        <!-- Post Thumbnail -->
                        @if($result->image)
                        <div class="post-thumbnail mb-50">
                            <img src="{{ asset($result->image) }}" alt="" width="100%">
                        </div>
                        @elseif($result->video)
                        <div class="post-thumbnail mb-50">
                            <iframe width="100%" height="400" src="{{ $result->video }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
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

                        <!-- Post Text -->
                        <div class="post-text">
                            <!-- Share -->
                            {{-- <div class="post-share">
                                <span>Share</span>
                                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#" class="pin"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a>
                            </div> --}}
                            @if($result->description)
                            <p>{!! $result->description !!}</p>
                            @elseif ($result->content)
                            <p>{!! $result->content !!}</p>
                            @endif
                            {{-- <div class="row">
                                <div class="col-12 col-md-6">
                                    <img class="mb-30" src="img/blog-img/4.jpg" alt="">
                                </div>
                                <div class="col-12 col-md-6">
                                    <img class="mb-30" src="img/blog-img/3.jpg" alt="">
                                </div>
                            </div> --}}

                            <!-- List -->
                            @if($result->document)
                            <div class="nikki-list-area mb-50">
                                <h4 class="mb-15">Documents</h4>
                                <ul class="nikki-list">
                                    <li> <a class="btn btn-info btn-forth rounded-pill px-3" href="{{ asset($result->document) }}" target="blank">View Document</a></li>
                                </ul>
                            </div>
                            @endif
                            <!-- Post Tags & Share -->
                            {{-- <div class="post-tags-share">
                                <!-- Tags -->
                                <ol class="popular-tags d-flex flex-wrap">
                                    <li><a href="#">HealthFood</a></li>
                                    <li><a href="#">Yoga</a></li>
                                    <li><a href="#">Life Style</a></li>
                                </ol>
                            </div> --}}

                            <!-- Related Post Area -->
                            @if($model != "Course")
                            <div class="related-posts clearfix">
                                <!-- Headline -->
                                <h4 class="headline">Recent Post</h4>

                                <div class="row">

                                    <!-- Single Blog Post -->
                                    @forelse($latests as $latest)
                                    <div class="col-12 col-lg-6">
                                        <div class="single-blog-post mb-50">
                                            <!-- Thumbnail -->
                                            <div class="post-thumbnail">
                                                <a href="/front-detail/{{ $latest->id }}/{{ $model }}"><img src="{{ asset($latest->image) }}" alt=""></a>
                                            </div>
                                            <!-- Content -->
                                            <div class="post-content">
                                                <p class="post-date">{{ Carbon\Carbon::parse($result->created_at)->format('M d, Y') }}</p>
                                                <a href="/front-detail/{{ $latest->id }}/{{ $model }}" class="post-title">
                                                    <h4>{{ Str::limit($latest->title, 24, '...') }}</h4>
                                                </a>
                                                @if($latest->description)
                                                <p class="post-excerpt">{!! Str::limit($latest->description, 90, '...') !!}</p>
                                                @elseif ($latest->content)
                                                <p class="post-excerpt">{!! Str::limit($latest->content, 90, '...') !!}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    @endforelse

                                    <!-- Single Blog Post -->


                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>




{{-- Service Section --}}

@endsection
