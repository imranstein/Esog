@extends('Front.layouts.app')
@section('title','Guidelines')
@section('content')
<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Guidelines</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Guidelines</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->


<section class="mosh-team-area section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <!-- Single Feature Area -->
                    @foreach ($guidelines as $guideline)

                    <div class="col-12 col-sm-6 col-md-4">
                        <article class="postcard light blue" style="height: 254px;">
                            <div class="single-feature-area d-flex" style="margin-top: 24px;margin-left: 16px;">
                                <div class="feature-icon mr-30">
                                    <img src="img/core-img/edit.png" alt="">
                                </div>
                                <div class="feature-content">
                                    <h6>{{ $guideline->title }}</h6>
                                    <p>{!! Str::limit($guideline->description, 120) !!}e</p>
                                    {{-- <button class="btn mosh-btn mt-50" type="submit">read more</button> --}}
                                    <a href="/front-detail/{{ $guideline->id }}/Guidelines" class="btn mosh-btn mt-25">read more</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
                {{ $guidelines->links() }}

            </div>
        </div>
    </div>

</section>

@endsection
