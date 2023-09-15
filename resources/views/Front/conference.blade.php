@extends('Front.layouts.app')
@section('title','Annual Conference')
@section('content')

<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Annual Conferences</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Annual Conferences</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->


<section class="mosh-team-area section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    @forelse($conferences as $conference)

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading{{ $conference->id }}">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $conference->id }}" aria-expanded="true" aria-controls="collapse{{ $conference->id }}">
                                    {{ $conference->title }}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse{{ $conference->id }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{ $conference->id }}">
                            <div class="panel-body">
                                <p>

                                    <label style="color:#000;font-weight: 500;">Conference Date : </label>
                                    {{ $conference->date }}
                                    <br>
                                    {!! $conference->description !!} </p>

                            </div>
                        </div>
                    </div>
                    @empty
                    @endforelse

                </div>
            </div>
        </div>
    </div>

</section>



@endsection
