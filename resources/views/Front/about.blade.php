@extends('Front.layouts.app')
@section('title','About Us')
@section('content')
<div class="about-us-area section-padding-0-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-content">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>About Us</h2>
                        <p>Welcome to Ethiopian Society Of Obstetricians & Gynecologists</p>

                    </div>

                    <img src="{{ asset('Front/img/2.JPG') }}" alt="">

                    <div class="about-text">
                        <p>The Ethiopian Society of Obstetricians & Gynecologists (ESOG) was established in 1992 in response to the Safe Motherhood Initiative as a collective professional expression of concern to the high maternal and perinatal mortality and morbidity, and the poor SRH status in the country. The main aim was to enhance the contribution of Obstetricians and Gynecologists to improve access and quality of the SRH service in Ethiopia. Consequently, during the last 28 years ESOG has undertaken a number of remarkable SRH activities by engaging its members, working hand in hand with FMoH and networking with other partners working in the area of SRH. The major focus of intervention includes Safe Motherhood, prevention of Mother to Child Transmission of HIV/AIDS, Prevention of Post Partum Hemorrhage, Care for Survivors of Sexual Assault, improving access to quality CEmONC services, introducing national standards and guidelines.</p>

                    </div>

                    <div class="row">
                        <div class="col-12 col-md-4">
                            <img src="img/blog-img/2.jpg" alt="">
                        </div>
                        <div class="col-12 col-md-4">
                            <img src="img/blog-img/3.jpg" alt="">
                        </div>
                        <div class="col-12 col-md-4">
                            <img src="img/blog-img/4.jpg" alt="">
                        </div>
                    </div>

                    <div class="about-text">
                        <h4>What we Do</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Nam ut dui tincidunt, tincidunt dui sit amet, vestibulum lacus.</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Vestibulum id risus sit amet metus consectetur ornare.</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Integer a quam id ante venenatis interdum.</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Donec semper ante quis mi lobortis molestie.</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Aliquam pulvinar quam eget purus pulvinar vehicula.</li>
                        </ul>
                        <p>Nullam venenatis, nisi ac scelerisque tincidunt, elit ante volutpat velit, a rhoncus ipsum est vel nulla. Nulla nibh arcu, porttitor non ipsum vel, ullamcorper faucibus mauris. Vivamus interdum molestie ex, id tincidunt nibh volutpat eu. Nunc tempus porttitor tortor. Pellentesque id efficitur odio. Phasellus non risus dapibus, lobortis mi non, tincidunt lorem. Curabitur sed dolor felis. Vivamus mollis fringilla dictum.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
