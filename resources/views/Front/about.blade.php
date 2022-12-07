@extends('Front.layouts.app')
@section('title','About Us')
@section('content')
{{-- <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h1 class="display-1 text-dark">About Us</h1>
                <div class="pt-2">
                    <a href="" class="btn btn-forth rounded-pill py-2 px-4 mx-2">Home</a>
                    <a href="" class="btn btn-forth rounded-pill py-2 px-4 mx-2">About Us</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Hero End -->

<!-- About Start -->
<section id="about" class="about container-fluid py-5" style="margin: 90px 0;padding:6em;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative" style="background-image: url({{ asset('Front/img/3.jpg')}}); background-size: cover; background-position: center center;">

                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
            </div>

            <div class="col-xl-6 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                <h3>About Us</h3>
                <p>
                    The Ethiopian Society of Obstetricians & Gynecologists (ESOG) was established in 1992 in response to the Safe Motherhood Initiative as a collective professional expression of concern to the high maternal and perinatal mortality and morbidity, and the poor SRH status in the country. The main aim was to enhance the contribution of Obstetricians and Gynecologists to improve access and quality of the SRH service in Ethiopia. Consequently, during the last 28 years ESOG has undertaken a number of remarkable SRH activities by engaging its members, working hand in hand with FMoH and networking with other partners working in the area of SRH. The major focus of intervention includes Safe Motherhood, prevention of Mother to Child Transmission of HIV/AIDS, Prevention of Post Partum Hemorrhage, Care for Survivors of Sexual Assault, improving access to quality CEmONC services, introducing national standards and guidelines.
                </p>
{{--
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-fingerprint"></i></div>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                    <p class="description">
                        Voluptatum deleniti atque corrupti quos dolores et quas
                        molestias excepturi sint occaecati cupiditate non provident
                    </p>
                </div>

                <div class="icon-box">
                    <div class="icon"><i class="bx bx-gift"></i></div>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                    <p class="description">
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui
                        blanditiis praesentium voluptatum deleniti atque
                    </p>
                </div>

                <div class="icon-box">
                    <div class="icon"><i class="bx bx-atom"></i></div>
                    <h4 class="title"><a href="">Dine Pad</a></h4>
                    <p class="description">
                        Explicabo est voluptatum asperiores consequatur magnam. Et
                        veritatis odit. Sunt aut deserunt minus aut eligendi omnis
                    </p>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- About End -->
<!-- About Start -->
{{-- <section id="about" class="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-4">
                <h3>Mission</h3>
                <p>
                    Esse voluptas cumque vel exercitationem. Reiciendis est hic
                    accusamus. Non ipsam et sed minima temporibus laudantium. Soluta
                    voluptate sed facere corporis dolores excepturi. Libero laboriosam
                    sint et id nulla tenetur. Suscipit aut voluptate.
                </p>

                <div class="icon-box">
                    <div class="icon"><i class="bx bx-fingerprint"></i></div>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                    <p class="description">
                        Voluptatum deleniti atque corrupti quos dolores et quas
                        molestias excepturi sint occaecati cupiditate non provident
                    </p>
                </div>

                <div class="icon-box">
                    <div class="icon"><i class="bx bx-gift"></i></div>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                    <p class="description">
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui
                        blanditiis praesentium voluptatum deleniti atque
                    </p>
                </div>

                <div class="icon-box">
                    <div class="icon"><i class="bx bx-atom"></i></div>
                    <h4 class="title"><a href="">Dine Pad</a></h4>
                    <p class="description">
                        Explicabo est voluptatum asperiores consequatur magnam. Et
                        veritatis odit. Sunt aut deserunt minus aut eligendi omnis
                    </p>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-4">
                <h3>Vision</h3>
                <p>
                    Esse voluptas cumque vel exercitationem. Reiciendis est hic
                    accusamus. Non ipsam et sed minima temporibus laudantium. Soluta
                    voluptate sed facere corporis dolores excepturi. Libero laboriosam
                    sint et id nulla tenetur. Suscipit aut voluptate.
                </p>

                <div class="icon-box">
                    <div class="icon"><i class="bx bx-fingerprint"></i></div>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                    <p class="description">
                        Voluptatum deleniti atque corrupti quos dolores et quas
                        molestias excepturi sint occaecati cupiditate non provident
                    </p>
                </div>

                <div class="icon-box">
                    <div class="icon"><i class="bx bx-gift"></i></div>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                    <p class="description">
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui
                        blanditiis praesentium voluptatum deleniti atque
                    </p>
                </div>

                <div class="icon-box">
                    <div class="icon"><i class="bx bx-atom"></i></div>
                    <h4 class="title"><a href="">Dine Pad</a></h4>
                    <p class="description">
                        Explicabo est voluptatum asperiores consequatur magnam. Et
                        veritatis odit. Sunt aut deserunt minus aut eligendi omnis
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- About End -->
<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
            <h4 class="display-6">Some Of Our Executive</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1" />
        </div>
        <div class="row g-3">
            @foreach ($teams as $team)

            <div class="col-lg-4 col-md-6">
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{ $team->image}}" alt="" />
                    <div class="team-text">
                        <div class="team-social">
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="/{{ $team->twitter }}"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="/{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2" href="/{{ $team->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="mt-auto mb-2">
                            <h4 class="mb-1">{{ $team->name }}</h4>
                            <span class="text-uppercase">{{ $team->designation }}</span>
                            <span class="text-uppercase">{{ $team->email }}</span>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{-- Service Section --}}

@endsection
