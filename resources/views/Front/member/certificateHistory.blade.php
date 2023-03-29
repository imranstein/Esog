@extends('Front.layouts.memberApp')
@section('content')

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
            <h4 class="display-6">History</h1>
                <hr class="w-25 mx-auto text-primary" style="opacity: 1" />
        </div>
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
