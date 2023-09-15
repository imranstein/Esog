@extends('Front.layouts.app')
@section('title','Contact Us')
@section('content')
<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Contact</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Say Hello</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="map-area">
    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen></iframe> --}}
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.5476579315255!2d38.75573901459058!3d9.01370239353145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b856ccc941901%3A0x5053eb99e57c4eb0!2sESOG!5e0!3m2!1sen!2set!4v1672906357801!5m2!1sen!2set" allowfullscreen></iframe>

</div>

<!-- ***** Breadcumb Area End ***** -->

<!-- ***** Contact Area Start ***** -->
<section class="contact-area section_padding_100">
    <div class="container">
        <div class="row">
            <!-- Contact Form Area -->
            <div class="col-12 col-md-8">
                <div class="contact-form-area">
                    <h2>Get in touch</h2>
                    <form method="POST" action="{{ route('front.contact.send') }}>
                        <div class=" row">
                        <div class="col-12 col-md-6">
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" value="{{ old('subject') }}">
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message" name="message">{{ old('message') }}>
                            </textarea>
                        </div>
                        <button class="btn mosh-btn mt-50" type="submit">Send Message</button>
                </div>
                </form>
            </div>
        </div>
        <!-- Contact Information -->
        <div class="col-12 col-md-4">
            <div class="contact-information">
                <h2>Contact</h2>
                <div class="single-contact-info d-flex">
                    <div class="contact-icon mr-15">
                        <img src="{{ asset('Front/img/core-img/map.png')}}" alt="">
                    </div>
                    <p>Tsehafi Tízaz Teferawork Keda Building, <br> Ras Desta Damtew Avenue</p>

                </div>
                <div class="single-contact-info d-flex">
                    <div class="contact-icon mr-15">
                        <img src="{{ asset('Front/img/core-img/call.png')}}" alt="">
                    </div>
                    <p>Main: <a href="tel:+251115506068">+251115506068</a> <br> Office: <a href="tel:+251115506069">+251115506069</a></p>
                </div>
                <div class="single-contact-info d-flex">
                    <div class="contact-icon mr-15">
                        <img src="{{ asset('Front/img/core-img/message.png')}}" alt="">
                    </div>
                    <p><a href="mailto: info@esog-eth.org"> info@esog-eth.org</a> <br> <a href="mailto: esogeth@gmail.com"> esogeth@gmail.com</a></p>
                </div>
                <div class="contact-social-info mt-50">
                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/esogethiopia"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://www.youtube.com/channel/UCSkpjufHp_Nsnh_WGf3PM5w?view_as=subscriber"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>



<!-- Contact Start -->

<!-- ##### Google Maps End ##### -->

<!-- ##### Contact Area Start ##### -->

@endsection
