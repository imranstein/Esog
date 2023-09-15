@extends('Front.layouts.app')
@section('title','Strategic Plan')
@section('content')
<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Stratagic plan</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Stratagic plan</li>
                        </ol>

                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->



<section class="mosh-aboutUs-area" style="margin-bottom: 30px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="mosh-about-us-content">
                    <div class="section-heading">
                        <h3>Introduction</h3>
                    </div>

                    <p>
                        The Ethiopian Society of Obstetricians & Gynecologists (ESOG) was established in 1992 in response to the Safe Motherhood Initiative as a collective professional expression of concern to the high maternal and perinatal mortality and morbidity, and the poor SRH status in the country. The main aim was to enhance the contribution of Obstetricians and Gynecologists to improve access and quality of the SRH service in Ethiopia. Consequently, during the last 19 years ESOG has undertaken a number of remarkable SRH activities by engaging its members, working hand in hand with FMOH and networking with other partners working in area of SRH. The major focus of intervention includes Safe Motherhood, prevention of Mother to Child Transmission of HIV/AIDS, Prevention of Post Partum Hemorrhage, Care for Survivors of Sexual Assault, improving access to quality CEMOC services, introducing national standards and guidelines
                    </p>
                    <a href="{{ asset('Document/Strategic Plan.pdf') }}" target="blank" class="btn mosh-btn mt-50">Strategic plan PDF</a>

                </div>
            </div>
        </div>
    </div>
</section>


@endsection
