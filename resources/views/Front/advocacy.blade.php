@extends('Front.layouts.app')
@section('title','Advocacies')
@section('content')

<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Advocacy</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Advocacy</li>
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
                    @forelse ($advocacies as $advocacy)
                    <div class="col-12 col-sm-6 col-md-4">
                        <article class="postcard light blue">
                            <div class="single-feature-area d-flex" style="margin-top: 24px;margin-left: 16px; margin-bottom: 20px;"">
                                <div class=" feature-icon mr-30">
                                <img src="img/core-img/edit.png" alt="">
                            </div>
                            <div class="feature-content">
                                <h6>{{ $advocacy->title }}</h6>
                                <p>{!! Str::limit($advocacy->content, 120) !!}</p>

                                {{-- <button class="btn mosh-btn mt-50" type="submit" >read more</button> --}}
                                <a href="/front-detail/{{ $advocacy->id }}/Advocacy" class="btn mosh-btn mt-25">Read More</a>
                            </div>
                    </div>
                    </article>
                </div>
                @empty

                @endforelse
                <!-- Single Feature Area -->

            </div>
            {{ $advocacies->links() }}

        </div>
    </div>
    </div>

</section>



@endsection
