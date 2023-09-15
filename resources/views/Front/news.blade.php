@extends('Front.layouts.app')
@section('title','News')
@section('content')
<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Articles</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Articles</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->

<section class="elements-area section_padding_100">
    <div class="container">
        <div class="row">


            <div class="col-12">
                <div class="row">
                    <!-- Single Feature Area -->
                    @forelse($news as $latest)
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="single-feature-area d-flex">
                            <div class="feature-content">
                                <img src="{{ asset($latest->image) }}" alt="">
                                <h5>{{ Str::limit($latest->title, 40, '...') }}</h5>
                                <p>{!! Str::limit($latest->description, 120, '...') !!}</p>
                                {{-- <button class="btn mosh-btn mt-50" type="submit">read more</button> --}}
                                <a href="/front-detail/{{ $latest->id }}/News" class="btn mosh-btn mt-50">read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Feature Area -->
                    @empty

                    @endforelse
                </div>
                {{ $news->links() }}
            </div>
        </div>
    </div>
</section>


@endsection
