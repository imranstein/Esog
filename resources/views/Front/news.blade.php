@extends('Front.layouts.app')
@section('title','News')
@section('content')
{{-- <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h1 class="display-1 text-dark">News</h1>

            </div>
        </div>
    </div>
</div> --}}
<!-- Hero End -->

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="col-12">
            <div class="section-heading">
                <h2>Articles</h2>
            </div>
        </div>

        <div class="row g-3">
            @foreach($news as $latest)
            {{-- <div class="col-xl-4 col-lg-6">
                <div class="blog-item bg-primary">
                    <img class="img-fluid w-100" src="{{ asset($latest->image)}}" alt="" />
            <div class="d-flex align-items-center">
                <div class="bg-forth mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4" style="width: 60px; height: 100px">
                    <i class="fa fa-calendar-alt text-dark mb-2"></i>
                    <p class="m-0 text-white">
                        {{-- convert it to Month and Date --}
                                {{ date('M d', strtotime($latest->created_at)) }}
                        {{-- {{ $latest->created_at }} --}
                    </p>
                    <small class="text-white">
                        {{ date('Y', strtotime($latest->created_at)) }}

                    </small>
                </div>
                <a class="h4 m-0 text-truncate me-4" style="color:white;" href="/front-detail/{{ $latest->id }}/News">{{ $latest->title }}</a>
            </div>
            <div class="d-flex justify-content-between border-top border-secondary p-4">
                <div class="d-flex align-items-center">
                    <img class="rounded-circle me-2" src="{{ asset('Front/img/user.jpg')}}" width="30" height="30" alt="" />
                    <small class="text-uppercase">John Doe</small>
                </div>
                {{-- <div class="d-flex align-items-center">
                            <small class="ms-3"><i class="fa fa-eye text-forth me-2"></i>12345</small>
                            <small class="ms-3"><i class="fa fa-comment text-forth me-2"></i>123</small>
                        </div> --}
                    </div>
                </div>
            </div> --}}
                {{-- <div class="col-md-4 mt-4">
                    <div class="card profile-card-5">
                        <div class="card-img-block">
                            <a href="/front-detail/{{ $latest->id }}/News">
                <img class="card-img-top" src="{{ asset($latest->image)}}" alt="Card image cap">
                </a>
            </div>
            <div class="card-body pt-0">
                <h5 class="card-title"><a href="/front-detail/{{ $latest->id }}/News">{{ substr($latest->title,0,30) }}</a></h5>
                <p class="card-text">{!! substr($latest->description,0,150) !!}</p>

            </div>
        </div>
    </div> --}}
    <div class="col-12 col-sm-4">
        <div class="single-blog-post mb-50">
            <!-- Thumbnail -->
            <div class="post-thumbnail">
                <a href="/front-detail/{{ $latest->id }}/News"><img src="{{ asset($latest->image) }}" style="height: 233.3px" alt=""></a>
            </div>
            <!-- Content -->
            <div class="post-content">
                <p class="post-date">{{ Carbon\Carbon::parse($latest->created_at)->format('M d, Y')}}</p>
                <a href="/front-detail/{{ $latest->id }}/News" class="post-title">
                    <h4>{{ Str::limit($latest->title, 40, '...') }}</h4>
                </a>
                <p class="post-excerpt">{{ Str::limit($latest->description, 120, '...') }}</p>
            </div>
        </div>
    </div>

    @endforeach
    {{ $news->links() }}

</div>

</div>
</div>


{{-- Service Section --}}

@endsection
