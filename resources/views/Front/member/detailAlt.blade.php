@extends('Front.layouts.memberApp')
@section('content')
<section class="blog-content-area section-padding-0-100">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Blog Posts Area -->
            <div class="col-12">

                <!-- Post Details Area -->
                <div class="single-post-details-area">
                    <div class="post-content">

                        <div class="text-center mb-50">
                            <p class="post-date">{{ Carbon\Carbon::parse($course->created_at)->format('M d,Y') }}</p>
                            <h2 class="post-title">{{ $course->title }}</h2>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a href="#"><span>by</span> {{ $course->author }}</a>
                            </div>
                        </div>

                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail mb-50">
                            {{-- video --}}
                            <video width="100%" height="100%" controls>
                                <source src="{{ asset($course->video) }}" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div>

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

                            <p>{!! $course->description !!}</p>

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <img class="mb-30" src="img/blog-img/4.jpg" alt="">
                                </div>
                                <div class="col-12 col-md-6">
                                    <img class="mb-30" src="img/blog-img/3.jpg" alt="">
                                </div>
                            </div>

                            <!-- List -->
                            @if($course->document)
                            <div class="nikki-list-area mb-50">
                                <h4 class="mb-15">Downloadables</h4>
                                <ul class="nikki-list">
                                    <li><a href="{{ asset($course->document) }}" target="_blank">{{ $course->document }}</a></li>
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
                            <div class="related-posts clearfix">
                                <!-- Headline -->
                                <h4 class="headline">Other Enrolled Course</h4>

                                <div class="row">

                                    <!-- Single Blog Post -->
                                    @forelse($courses as $item)
                                    <div class="col-12 col-lg-6">
                                        <div class="single-blog-post mb-50">
                                            <!-- Thumbnail -->
                                            {{-- <div class="post-thumbnail">
                                                <a href="#"><img src="{{}}" alt=""></a>
                                        </div> --}}
                                        <!-- Content -->
                                        <div class="post-content">
                                            <p class="post-date">{{ Carbon\Carbon::parse($item->created_at)->format('M d, Y') }}</p>
                                            <a href="{{ route('memberCourse.show',$item->id) }}" class="post-title">
                                                <h4>{{ Str::limit($item->title, 24, '...') }}</h4>
                                            </a>
                                            <p class="post-excerpt">{!! Str::limit($item->description, 100, '...') !!}</p>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                @endforelse

                                <!-- Single Blog Post -->
                                {{-- <div class="col-12 col-lg-6">
                                        <div class="single-blog-post mb-50">
                                            <!-- Thumbnail -->
                                            <div class="post-thumbnail">
                                                <a href="#"><img src="img/blog-img/4.jpg" alt=""></a>
                                            </div>
                                            <!-- Content -->
                                            <div class="post-content">
                                                <p class="post-date">MAY 25, 2018 / Fashion</p>
                                                <a href="#" class="post-title">
                                                    <h4>5 Things to Know About Dating a Bisexual</h4>
                                                </a>
                                                <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                                            </div>
                                        </div>
                                    </div> --}}

                            </div>
                        </div>

                        <!-- Comment Area Start -->


                        <!-- Leave A Comment -->

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>


@endsection
