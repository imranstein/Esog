@extends('Front.layouts.memberApp')
@section('content')
<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Certificate History</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Certificate History</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container py-5">

        <div class="container">
            <div class="row">
                @forelse ($certificates as $certificate)
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">{{ $certificate->certificate }}</h5>
                            <div class="embed-responsive embed-responsive-4by3">
                                <a href="{{ asset('Certificate/' . $certificate->certificate) }}" target="_blank">
                                    <img class="embed-responsive-item" src="{{ asset('Front/assets/img/certificate.png') }}" alt="certificate">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="alert alert-warning text-center">
                        <h5 class="display-6">No Certificate Found</h5>
                    </div>
                </div>
                @endforelse
            </div>




        </div>
    </div>

</div>


@endsection
