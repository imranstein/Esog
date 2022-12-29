@extends('Front.layouts.app')
@section('title','Home')
@section('content')
<div class="row col-md-12">
    <div class="site-section py-0 col-md-6 col-lg-8" id="slider">
        <div class="owl-carousel hero-slide owl-style ">
            @foreach($sliders as $slider)
            <div class="site-section">
                <div class="container">
                    {{-- <div class="half-post-entry d-block d-lg-flex bg-light"> --}}
                    <div class="img-bg" style="background-image: url('{{ $slider->image }}');height: 30em;"></div>
                    {{-- <div class="contents">
                                    {{-- <span class="caption">Editor's Pick</span> --}
                                    <h2><a href="#">{{ $slider->title }}</a></h2>
                    <p class="mb-3">{!! $slider->description !!}</p>

                    <div class="post-meta">
                        {{-- <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">Food</a></span> --}}
                        {{-- <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span> --}
                                    </div>

                                </div> --}}
                    </div>
                    {{-- </div> --}}
                </div>
                @endforeach

            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="row justify-content-center position-relative" style="margin-top: 1em;">
                <div class="p-5 m-5 mb-0" style="background-color: rgb(223, 223, 223);">
                    <form method="POST" action="{{ route('front.memberRegister') }}" nctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">

                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;" name="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <input type="number" class="form-control bg-light border-0" placeholder="Your Phone" style="height: 55px;" name="phone" value="{{ old('phone') }}">
                                @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Workplace" style="height: 55px;" name="workplace" value="{{ old('workplace') }}">
                                @if ($errors->has('workplace'))
                                <span class="text-danger">{{ $errors->first('workplace') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <input type="file" class="form-control bg-light border-0" placeholder="Your Photo" style="height: 55px;" name="photo">
                                @if ($errors->has('photo'))
                                <span class="text-danger">{{ $errors->first('photo') }}</span>
                                @endif
                            </div>

                            <div class="col-6">
                                <button class="btn btn-secondary w-100 py-3 align-middle" type="submit">Register</button>
                            </div>
                            {{-- <div class="col-4">
                                <a href="{{ route('dashboard') }}" class="btn btn-secondary w-100 py-3" type="submit">Login</a>
                        </div> --}}
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid py-3">
    <div class="container py-3">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
            <h4 class="display-6">Education</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1" />
        </div>
        <div class="container">
            <div class="row">
                @foreach ($latests as $latest)
                <div class="col-lg-4">
                    <div class="card card-margin" id="cards">
                        <div class="card-header no-border">
                            <h5 class="card-title">{{ $latest->title }}</h5>
                        </div>
                        <div class="card-body pt-0">
                            <div class="widget-49">
                                <div class="widget-49-title-wrapper">
                                    <div class="widget-49-date-primary">
                                        <span class="widget-49-date-day">{{ $latest->created_at->format('d') }}</span>
                                        <span class="widget-49-date-month">{{ $latest->created_at->format('M') }}</span>
                                    </div>
                                    <div class="widget-49-meeting-info">
                                        <span class="widget-49-pro-title">{{ $latest->author }}</span>
                                    </div>

                                </div>

                                <ul class="widget-49-meeting-points">
                                    {{-- latest content only 100 charachters --}}
                                    <li class="widget-49-meeting-item">{!! Str::limit($latest->content, 150) !!}</li>
                                </ul>
                                <div class="widget-49-meeting-action">
                                    <a href="/front-detail/{{ $latest->id }}/Advocacy" class="btn btn-sm btn-flash-border-primary">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
<!-- Blog End -->
<!-- Small Introduction -->
{{-- <div class="container-fluid py-5" style="margin-top: 40px;background-color: rgb(225, 225, 225);">
                <div class="container py-5">
                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <h1 class="display-4 mb-4">Introduction</h1>
                            <p class="fs-6 fw-normal">
                                Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                                dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore
                                et tempor diam tempor erat dolor rebum sit ipsum.
                            </p>
                            <a href="" class="btn btn-forth rounded-pill py-md-3 px-md-5 mt-4">ReadMore</a>
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid w-100" src="{{ asset('Front/img/10.jpg')}}" alt="" />
</div>

</div>
</div>
</div> --}}
<!-- Small Introduction -->
{{-- Service --}}
<div style="margin-top: 90px">
    <section id="services" class="services">
        <div class="container">

            <div class="text-center mx-auto mb-5" style="max-width: 500px">
                <h4 class="display-6">Our Current Projects</h1>
                    <hr class="w-25 mx-auto text-primary" style="opacity: 1" />
            </div>


            <div class="row">
                @forelse ($projects as $project)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-heartbeat"></i></div>
                        <h4><a href="">{{ $project->title }}</a></h4>
                        <p>{!! Str::limit($project->description, 100, '...') !!}</p>
                    </div>
                </div>
                @empty

                @endforelse

                {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-pills"></i></div>
                        <h4><a href="">Sed ut perspiciatis</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-hospital-user"></i></div>
                        <h4><a href="">Magni Dolores</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-dna"></i></div>
                        <h4><a href="">Nemo Enim</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-wheelchair"></i></div>
                        <h4><a href="">Dele cardo</a></h4>
                        <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-notes-medical"></i></div>
                        <h4><a href="">Divera don</a></h4>
                        <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                    </div>
                </div> --}}

            </div>

        </div>
    </section>
</div>

{{-- End --}}
<!-- Team Start -->
{{-- <div class="container-fluid py-5">
                <div class="container py-5">
                    <div class="text-center mx-auto mb-5" style="max-width: 500px">
                        <h4 class="display-6">Latest Publications</h1>
                            <hr class="w-25 mx-auto text-primary" style="opacity: 1" />
                    </div>
                    <div class="row g-3">
                        @foreach ($publications as $publication)

                        <div class="profile-card-2"><img src="http://envato.jayasankarkr.in/code/profile/assets/img/profile-2.jpg" class="img img-responsive">
                            <div class="profile-name">{{ $publication->author }}</div>
<div class="profile-username">{{ $publication->title }}</div>
{{-- created at with diffforhumans form --}
                            <div class="profile-icons">{{ $publication->created_at->diffForHumans() }}</div>

</div>
@endforeach

</div>
</div>
</div> --}}

@endsection
