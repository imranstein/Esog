@extends('Front.layouts.app')
@section('title','Strategic Plan')
@section('content')
<div class="about-us-area section-padding-0-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-content">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>Strategic Plan</h2>
                        <p>Introduction</p>

                    </div>

                    <div class="about-text">
                        <p>The Ethiopian Society of Obstetricians & Gynecologists (ESOG) was established in 1992 in response to the Safe Motherhood Initiative as a collective professional expression of concern to the high maternal and perinatal mortality and morbidity, and the poor SRH status in the country. The main aim was to enhance the contribution of Obstetricians and Gynecologists to improve access and quality of the SRH service in Ethiopia. Consequently, during the last 19 years ESOG has undertaken a number of remarkable SRH activities by engaging its members, working hand in hand with FMOH and networking with other partners working in area of SRH. The major focus of intervention includes Safe Motherhood, prevention of Mother to Child Transmission of HIV/AIDS, Prevention of Post Partum Hemorrhage, Care for Survivors of Sexual Assault, improving access to quality CEMOC services, introducing national standards and guidelines.</p>
                    </div>

                    {{-- downloadable file --}}
                    <div class="about-text">
                        <a href="{{ asset('Document/Strategic Plan.pdf') }}" target="blank" class="btn btn-primary">Esog Strategic Plan pdf</a>

                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
