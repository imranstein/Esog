@extends('Front.layouts.app')
@section('title','Partners')
@section('content')
<div class="about-us-area section-padding-0-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-content">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>Partners</h2>

                    </div>
                    @forelse($partners as $partner)
                    <div class="c">
                        <input type="checkbox" id="faq-1">
                        <h5><label for="faq-1">{{ $partner->name }}</label></h5>
                        <div class="section">
                            <label for="faq-1">
                                <p>Website: <a href="{{ $partner->website }}" target="blank">{{ $partner->website }}</a></p>
                                <p> Email: <a href="mailto:{{ $partner->email }}">{{ $partner->email }}</a></p>

                            </label>
                            <p>{!! $partner->description !!}</p>
                        </div>
                    </div>
                    @empty
                    @endforelse



                </div>
            </div>
        </div>
    </div>
</div>


@endsection
