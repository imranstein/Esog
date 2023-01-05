@extends('Front.layouts.app')
@section('title','Contact Us')
@section('content')
{{-- <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-4 text-center text-lg-start">
                <h1 class="display-1 text-dark">Contact Us</h1>
                {{-- <div class="pt-2">
                    <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Home</a>
                    <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Contact Us</a>
                </div> --}
            </div>
        </div>
    </div>
</div> --}}
<!-- Hero End -->


<!-- Contact Start -->
<div class="map-area">
    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen></iframe> --}}
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.5476579315255!2d38.75573901459058!3d9.01370239353145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b856ccc941901%3A0x5053eb99e57c4eb0!2sESOG!5e0!3m2!1sen!2set!4v1672906357801!5m2!1sen!2set" allowfullscreen></iframe>

</div>
<!-- ##### Google Maps End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area section-padding-100-0">
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-6">
                <div class="contact-content mb-100">
                    <h4>Get In Touch</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum, consectetur adipisicing elit.</p>
                    <!-- Single Contact Info -->
                    <div class="single-contact-info">
                        <h6>Location:</h6>
                        <h4>Tsehafi Tízaz Teferawork Keda Building, Ras Desta Damtew Avenue</h4>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="single-contact-info">
                        <h6>Email:</h6>
                        {{-- prompt to email --}}
                        <h4><a href="mailto: info@esog-eth.org"> info@esog-eth.org</a></h4>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="single-contact-info">
                        <h6>Phone:</h6>
                        {{-- prompt to call --}}
                        <h4><a href="tel:+251115506068">+251115506068</a></h4>
                        <h4></h4>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="contact-content mb-100">
                    <h4>Contact Form</h4>

                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form method="POST" action="{{ route('front.contact.send') }}">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="contact-name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="contact-email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="contact-subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn nikki-btn mt-15">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- <div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h4 class="display-6">Please Feel Free To Contact Us</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
        </div>
        <div class="row g-3 mb-5">
            <div class="col-lg-4 col-md-6 pt-5">
                <div class="contact-item d-flex flex-column align-items-center justify-content-center text-center pb-5">
                    <div class="contact-icon p-3">
                        <div><i class="fa fa-2x fa-map-marker-alt"></i></div>
                    </div>
                    <h4 class="mt-5">Ghion Street, Addis Ababa, Ethiopia</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-5">
                <div class="contact-item d-flex flex-column align-items-center justify-content-center text-center pb-5">
                    <div class="contact-icon p-3">
                        <div><i class="fa fa-2x fa-phone"></i></div>
                    </div>
                    <h4 class="mt-5">+251 920 345 6789</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-5">
                <div class="contact-item d-flex flex-column align-items-center justify-content-center text-center pb-5">
                    <div class="contact-icon p-3">
                        <div><i class="fa fa-2x fa-envelope-open"></i></div>
                    </div>
                    <h4 class="mt-5">info@esog.com</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="height: 500px;">
                <div class="position-relative h-100">
                    <iframe class="position-relative w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <div class="row justify-content-center position-relative" style="margin-top: -200px; z-index: 1;">
            <div class="col-lg-8">
                <div class="bg-primary p-5 m-5 mb-0">
                    <form method="POST" action="{{ route('front.contact.send') }}">
@csrf
<div class="row g-3">
    <div class="col-12 col-sm-6">
        <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;" name="name">
    </div>
    <div class="col-12 col-sm-6">
        <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;" name="email">
    </div>
    <div class="col-12">
        <input type="text" class="form-control bg-light border-0" placeholder="Subject" style="height: 55px;" name="subject">
    </div>
    <div class="col-12">
        <textarea class="form-control bg-light border-0" rows="5" placeholder="Message" name="message"></textarea>
    </div>
    <div class="col-12">
        <button class="btn btn-secondary w-100 py-3" type="submit">Send Message</button>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div> --}}

@endsection
