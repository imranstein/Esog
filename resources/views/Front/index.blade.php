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
            <img src="img/microscope.jpg" class="image" alt="microscope" />
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
            <img src="img/production.jpg" class="image" alt="production" />
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
            <img src="img/id.jpg" class="image" alt="id" />
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
            <div class="col-xl-4 col-lg-6">
                <div class="blog-item bg-primary">
                    <img class="img-fluid w-100" src="img/blog-1.jpg" alt="" />
                    <div class="d-flex align-items-center">
                        <div class="bg-forth mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4" style="width: 60px; height: 100px">
                            <i class="fa fa-calendar-alt text-dark mb-2"></i>
                            <p class="m-0 text-white">Jan 01</p>
                            <small class="text-white">2045</small>
                        </div>
                        <a class="h4 m-0 text-truncate me-4" href="">Dolor clita vero elitr sea stet dolor justo diam</a>
                    </div>
                    <div class="d-flex justify-content-between border-top border-secondary p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-2" src="img/user.jpg" width="30" height="30" alt="" />
                            <small class="text-uppercase">John Doe</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="ms-3"><i class="fa fa-eye text-forth me-2"></i>12345</small>
                            <small class="ms-3"><i class="fa fa-comment text-forth me-2"></i>123</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="blog-item bg-primary">
                    <img class="img-fluid w-100" src="img/blog-2.jpg" alt="" />
                    <div class="d-flex align-items-center">
                        <div class="bg-forth mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4" style="width: 60px; height: 100px">
                            <i class="fa fa-calendar-alt text-dark mb-2"></i>
                            <p class="m-0 text-white">Jan 01</p>
                            <small class="text-white">2045</small>
                        </div>
                        <a class="h4 m-0 text-truncate me-4" href="">Dolor clita vero elitr sea stet dolor justo diam</a>
                    </div>
                    <div class="d-flex justify-content-between border-top border-secondary p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-2" src="img/user.jpg" width="30" height="30" alt="" />
                            <small class="text-uppercase">John Doe</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>12345</small>
                            <small class="ms-3"><i class="fa fa-comment text-secondary me-2"></i>123</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="blog-item bg-primary">
                    <img class="img-fluid w-100" src="img/blog-3.jpg" alt="" />
                    <div class="d-flex align-items-center">
                        <div class="bg-forth mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4" style="width: 60px; height: 100px">
                            <i class="fa fa-calendar-alt text-primary mb-2"></i>
                            <p class="m-0 text-white">Jan 01</p>
                            <small class="text-white">2045</small>
                        </div>
                        <a class="h4 m-0 text-truncate me-4" href="">Dolor clita vero elitr sea stet dolor justo diam</a>
                    </div>
                    <div class="d-flex justify-content-between border-top border-secondary p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-2" src="img/user.jpg" width="30" height="30" alt="" />
                            <small class="text-uppercase">John Doe</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>12345</small>
                            <small class="ms-3"><i class="fa fa-comment text-secondary me-2"></i>123</small>
                        </div>
                    </div>
                </div>
            </div>
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
<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
            <h1 class="display-5">Dedicated Team Members</h1>
            <hr class="w-25 mx-auto text-primary" style="opacity: 1" />
        </div>
        <div class="row g-3">
            <div class="col-lg-4 col-md-6">
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-1.jpg" alt="" />
                    <div class="team-text">
                        <div class="team-social">
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="mt-auto mb-3">
                            <h4 class="mb-1">Full Name</h4>
                            <span class="text-uppercase">Designation</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-2.jpg" alt="" />
                    <div class="team-text">
                        <div class="team-social">
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="mt-auto mb-3">
                            <h4 class="mb-1">Full Name</h4>
                            <span class="text-uppercase">Designation</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-3.jpg" alt="" />
                    <div class="team-text">
                        <div class="team-social">
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="mt-auto mb-3">
                            <h4 class="mb-1">Full Name</h4>
                            <span class="text-uppercase">Designation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
