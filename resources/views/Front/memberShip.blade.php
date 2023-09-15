@extends('Front.layouts.app')
@section('title','Membership Type')
@section('content')
<!-- ***** Breadcumb Area Start ***** -->
<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Membership Types</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Membership Types</li>
                        </ol>

                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->



<section class="mosh-aboutUs-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="mosh-about-us-content">
                    <div class="section-heading">

                    </div>


                    <h4>Full Member</h4>

                    <P>A Medical Doctor, who has completed a post graduate study in Obstetrics & Gynecology profession
                        and registered in the country, is eligible for full membership.</P>

                    <h4>Associate Member</h4>

                    <P> Residents in Obstetrics and Gynecology<br>
                        Other health and non-health professionals who, in the opinion of the executive board, can contribute to sexual and reproductive health and support the society to achieve its objectives.</br>
                        Organizations, which support the objectives of the society, may join the society as an associate member.</P>

                    <h4>Honorary Member</h4>

                    <p>Those, who in the opinion of the executive board may merit an honorary membership and approved by the general assembly, may join the society as honorary members.</p>

                    <h4>Life Time Member</h4>

                    <p> Full members may opt to become life members by paying a lump sum fee equivalent to 20 years subscription.
                        A life time member of the society shall be exempted from paying subsequent annual membership fees while continuing to exercise his/her rights and obligations in the society during his/her life time.</p>


                </div>
            </div>
        </div>
    </div>
</section>


@endsection
