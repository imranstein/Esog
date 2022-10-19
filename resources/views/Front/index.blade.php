@extends('Front.layouts.app')
@section('title','Home')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('Front/img/microscope.jpg')}}" class="image" alt="microscope" />
            <div class="carousel-caption">
                <h3>Award Winning Support</h3>
                <p>
                    Pulvinar leo id risus pellentesque vestibulum. Sed diam libero,
                    sodales eget cursus dolor.
                </p>
                <div class="carousel-action">
                    <a href="#" class="btn btn-primary">Learn More</a>
                    <a href="#" class="btn btn-success">Try Now</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('Front/img/production.jpg')}}" class="image" alt="production" />
            <div class="carousel-caption">
                <h3>Amazing Digital Experience</h3>
                <p>
                    Nullam hendrerit justo non leo aliquet imperdiet. Etiam sagittis
                    lectus condime dapibus.
                </p>
                <div class="carousel-action">
                    <a href="#" class="btn btn-primary">Learn More</a>
                    <a href="#" class="btn btn-success">Try Now</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('Front/img/id.jpg')}}" class="image" alt="id" />
            <div class="carousel-caption">
                <h3>Live Monitoring Tools</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu
                    pellentesque sem tempor.
                </p>
                <div class="carousel-action">
                    <a href="#" class="btn btn-primary">Learn More</a>
                    <a href="#" class="btn btn-success">Try Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
</div>

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
            <h1 class="display-5">Latest Articles</h1>
            <hr class="w-25 mx-auto text-primary" style="opacity: 1" />
        </div>
        <div class="row g-3">
            @foreach($latests as $latest)
            <div class="col-xl-4 col-lg-6">
                <div class="blog-item bg-primary">
                    <img class="img-fluid w-100" src="{{ asset($latest->image)}}" alt="" />
                    <div class="d-flex align-items-center">
                        <div class="bg-forth mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4" style="width: 60px; height: 100px">
                            <i class="fa fa-calendar-alt text-dark mb-2"></i>
                            <p class="m-0 text-white">
                                {{-- convert it to Month and Date --}}
                                {{ date('M d', strtotime($latest->created_at)) }}
                                {{-- {{ $latest->created_at }} --}}
                            </p>
                            <small class="text-white">
                                {{ date('Y', strtotime($latest->created_at)) }}

                            </small>
                        </div>
                        <a class="h4 m-0 text-truncate me-4" href="">{{ $latest->title }}</a>
                    </div>
                    <div class="d-flex justify-content-between border-top border-secondary p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-2" src="{{ asset('Front/img/user.jpg')}}" width="30" height="30" alt="" />
                            <small class="text-uppercase">John Doe</small>
                        </div>
                        {{-- <div class="d-flex align-items-center">
                            <small class="ms-3"><i class="fa fa-eye text-forth me-2"></i>12345</small>
                            <small class="ms-3"><i class="fa fa-comment text-forth me-2"></i>123</small>
                        </div> --}}
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Blog End -->
<!-- Small Introduction -->
<div class="container-fluid bg-primary bg-call-to-action py-5" style="margin-top: 90px">
    <div class="container py-5">
        <div class="row g-0 justify-content-start">
            <div class="col-lg-6">
                <h1 class="display-5 mb-4">Introduction</h1>
                <p class="fs-4 fw-normal">
                    Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
                    dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore
                    et tempor diam tempor erat dolor rebum sit ipsum.
                </p>
                <a href="" class="btn btn-forth rounded-pill py-md-3 px-md-5 mt-4">ReadMore</a>
            </div>
        </div>
    </div>
</div>
<!-- Small Introduction -->
{{-- Service --}}
<div style="margin-top: 90px">
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-heartbeat"></i></div>
                        <h4><a href="">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
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
                </div>

            </div>

        </div>
    </section>
</div>

{{-- End --}}
<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
            <h1 class="display-5">Latest Publications</h1>
            <hr class="w-25 mx-auto text-primary" style="opacity: 1" />
        </div>
        <div class="row g-3">
            @foreach ($publications as $publication)

            <div class="profile-card-2"><img src="http://envato.jayasankarkr.in/code/profile/assets/img/profile-2.jpg" class="img img-responsive">
                <div class="profile-name">{{ $publication->author }}</div>
                <div class="profile-username">{{ $publication->title }}</div>
                {{-- created at with diffforhumans form --}}
                <div class="profile-icons">{{ $publication->created_at->diffForHumans() }}</div>

            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
