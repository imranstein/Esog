@extends('Front.layouts.app')
@section('title','About Us')
@section('content')
<!-- ***** Breadcumb Area Start ***** -->
<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Read Our History</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** About Us Area Start ***** -->
<section class="mosh-aboutUs-area section_padding_100_0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="mosh-about-us-content">
                    <div class="section-heading">
                        <p>About Us</p>
                        <h3>Welcome to Ethiopian Society Of Obstetricians & Gynecologists</h3>
                    </div>
                    <p>The Ethiopian Society of Obstetricians & Gynecologists (ESOG) was established in 1992 in response to the Safe Motherhood Initiative as a collective professional expression of concern to the high maternal and perinatal mortality and morbidity, and the poor SRH status in the country. The main aim was to enhance the contribution of Obstetricians and Gynecologists to improve access and quality of the SRH service in Ethiopia. Consequently, during the last 28 years ESOG has undertaken a number of remarkable SRH activities by engaging its members, working hand in hand with FMoH and networking with other partners working in the area of SRH. The major focus of intervention includes Safe Motherhood, prevention of Mother to Child Transmission of HIV/AIDS, Prevention of Post Partum Hemorrhage, Care for Survivors of Sexual Assault, improving access to quality CEmONC services, introducing national standards and guidelines.</p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="mosh-about-us-thumb wow fadeInUp" data-wow-delay="0.5s">
                    <img src="{{ asset('Front/img/bg-img/headpiece.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Us Area End ***** -->

<!-- ***** Features Area Start ***** -->
<section class="mosh-about-features-area section_padding_100">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-12 col-md-4">
                <div class="mosh-features-thumb wow fadeIn" data-wow-delay="0.5s">
                    <img src="{{ asset('Front/img/bg-img/features-2.png') }}" alt="">
                </div>
            </div>

            <div class="col-12 col-md-8">
                <div class="mosh-about-us-content">
                    <div class="section-heading">
                        <p>Features</p>
                        <h2>What we Do</h2>
                    </div>
                    <div class="row">
                        <!-- Single Feature Area -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</br>

                            <i class="fa-solid fa-arrow-right" style="color: #14a3d1;"></i>&nbsp;&nbsp; Nam ut dui tincidunt, tincidunt dui sit amet, vestibulum lacus.</br>
                            <i class="fa-solid fa-arrow-right" style="color: #14a3d1;"></i>&nbsp;&nbsp; Vestibulum id risus sit amet metus consectetur ornare.</br>
                            <i class="fa-solid fa-arrow-right" style="color: #14a3d1;"></i> &nbsp;&nbsp; Integer a quam id ante venenatis interdum.</br>
                            <i class="fa-solid fa-arrow-right" style="color: #14a3d1;"></i> &nbsp;&nbsp; Donec semper ante quis mi lobortis molestie.</br>
                            <i class="fa-solid fa-arrow-right" style="color: #14a3d1;"></i> &nbsp;&nbsp; Aliquam pulvinar quam eget purus pulvinar vehicula.</br>

                            Nullam venenatis, nisi ac scelerisque tincidunt, elit ante volutpat velit, a rhoncus ipsum est vel nulla.
                            Nulla nibh arcu, porttitor non ipsum vel, ullamcorper faucibus mauris. Vivamus interdum molestie ex, id tincidunt
                            nibh volutpat eu. Nunc tempus porttitor tortor. Pellentesque id efficitur odio. Phasellus non risus dapibus, lobortis
                            mi non, tincidunt lorem. Curabitur sed dolor felis. Vivamus mollis fringilla dictum.</p>
                    </div>
                    <a href="#" class="btn mosh-btn mt-50">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
