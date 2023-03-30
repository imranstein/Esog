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
                            <video id="myVideo" width="100%" height="100%" controls="true" poster="{{ $course->thumbnail }}">
                                <source src="/{{ $course->video }}" type="video/mp4">
                                <source src="/{{ $course->video }}" type="video/mkv">

                                Your browser does not support the video tag.

                            </video>

                            <script>
                                var video = document.getElementById("myVideo");
                                var videoLength = "{{ $memberCourse->video_length  }}";
                                video.addEventListener("loadedmetadata", function() {
                                    console.log(videoLength);
                                    // change the video_length to seconds
                                    this.currentTime = videoLength;

                                });

                            </script>

                        </div>
                        <!-- Post Text -->
                        <div class="post-text">
                            <!-- Share -->

                            <p>{!! $course->description !!}</p>

                            {{-- <div class="row">
                                <div class="col-12 col-md-6">
                                    <img class="mb-30" src="img/blog-img/4.jpg" alt="">
                                </div>
                                <div class="col-12 col-md-6">
                                    <img class="mb-30" src="img/blog-img/3.jpg" alt="">
                                </div>
                            </div> --}}

                            <!-- List -->
                            @if($course->document)
                            <div class="nikki-list-area mb-50">
                                <h4 class="mb-15">Downloadables</h4>
                                <ul class="nikki-list">
                                    <li><a href="{{ asset($course->document) }}" target="_blank">{{ $course->document }}</a></li>
                                </ul>
                            </div>
                            @endif
                            <div class="article-content">
                                <form method="POST" action="{{ route('finishCourse') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $course->id }}">
                                    <button type="submit" class="btn btn-primary" style="background-color: #86b7e2 ">Finish Course</button>

                                </form>

                                {{-- <a href="{{ route('finishCourse',$course->id) }}" class="btn btn-primary" style="background-color: #86b7e2 ">Finish Course</a> --}}
                            </div>


                            <div class="related-posts clearfix">
                                <!-- Headline -->
                                <h4 class="headline">Other Enrolled Course</h4>

                                <div class="row">

                                    <!-- Single Blog Post -->
                                    @forelse($courses as $item)
                                    <div class="col-12 col-lg-6">
                                        <div class="single-blog-post mb-50">

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
@section('script')
<script>
    var video = document.getElementById('myVideo');
    var courseId = "{{ $course->id }}";
    var csrfToken = "{{ csrf_token() }}";
    setInterval(function() {
        var currentTime = video.currentTime;
        // Send currentTime and courseId to server
        $.ajax({
            url: '/video-watched'
            , type: 'POST'
            , data: {
                time: currentTime
                , courseId: courseId
            }
            , headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });
    }, 10000);

</script>
@endsection
