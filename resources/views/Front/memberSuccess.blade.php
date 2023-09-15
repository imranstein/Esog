@extends('Front.layouts.app')
@section('title','Success')
@section('content')
<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Member Registration</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Member Registration Successful</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** Contact Area Start ***** -->
<section class="contact-area section_padding_100">
    <div class="container">
        <div class="row">
            <!-- Contact Form Area -->
            <div class="col-12">
                <div class="contact-form-area">
                    <div class="col-lg-8">
                        <div class="p-5 m-5 mb-0" style="background-color: rgb(223, 223, 223);">
                            <h4>You Have Registered Successfully.Please Check your Email for your temporary password.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Information -->

        </div>
    </div>
</section>
@endsection
