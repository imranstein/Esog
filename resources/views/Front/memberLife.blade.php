@extends('Front.layouts.memberApp')
@section('content')
<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Membership Payment</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Membership Payment</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center position-relative">
            <div class="col-lg-8">
                <div class="single-widget-area mb-30">
                    <!-- Title -->

                    <!-- Thumbnail -->
                    {{-- <div class="about-thumbnail">
                            <img src="img/blog-img/about-me.jpg" alt="">
                        </div> --}}
                    <!-- Content -->
                    <div class="widget-content text-center">
                        <form method="POST" action="{{ route('pay') }}" id="paymentForm">
                            {{ csrf_field() }}
                            @method('POST')
                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                            @php
                            $name = Auth::user()->name;
                            $firstName = explode(' ', $name)[0];
                            $lastName = explode(' ', $name)[1] ?? null;
                            @endphp
                            <div class="form-group" style="margin-top: 10px;">
                                <input type="text" name="first_name" value="{{ $firstName }}" readonly class="form-control">
                            </div>
                            <div class="form-group" style="margin-top: 10px;">
                                <input type="text" name="last_name" value="{{ $lastName }}" readonly class="form-control"> {{-- required --}}
                            </div>
                            <div class="form-group" style="margin-top: 10px;">
                                <input type="text" name="email" value="{{ Auth::user()->email; }}" readonly class="form-control"> {{-- required --}}
                            </div>
                            <div class="form-group" style="margin-top: 10px;">
                                <input type="number" name="amount" value="100" readonly class="form-control"> {{-- required in kobo --}}
                            </div>
                            <input type="hidden" name="type" value="yearly">
                            {{-- <input type="submit" value="Buy" lass="btn nikki-btn mt-15" /> --}}

                            <button type="submit" class="btn nikki-btn mt-15">Pay</button>


                        </form>

                    </div>
                </div>

            </div>


        </div>
    </div>
</div>




@endsection
