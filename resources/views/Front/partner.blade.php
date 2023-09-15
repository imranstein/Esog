@extends('Front.layouts.app')
@section('title','Partners')
@section('content')
<div class="mosh-breadcumb-area" style="background-image: url({{ asset('Front/img/core-img/breadcumb.png') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Partners</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Partners</li>
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
                    @forelse($partners as $partner)
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading{{$partner->id}}">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$partner->id}}" aria-expanded="true" aria-controls="collapse{{$partner->id}}">
                                    {{ $partner->name }}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse{{$partner->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$partner->id}}">
                            <div class="panel-body">
                                <p>


                                    Website:<a href="{{ $partner->website }}" target="blank">{{ $partner->website }}</a></br>

                                    Email: <a href="mailto:{{ $partner->email }}">{{ $partner->email }}</a></br>

                                    <p style="margin-left: 5%">{!! $partner->description !!}</p>
                                </p>
                            </div>
                        </div>
                    </div>

                    @empty
                    @endforelse
                </div>
                {{ $partners->links() }}
            </div>
        </div>
    </div>

</section>

@endsection
