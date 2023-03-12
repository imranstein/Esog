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
                        <input type="checkbox" id="faq-{{$partner->id}}" class="icheck">
                        <h5><label for="faq-{{$partner->id}}">{{ $partner->name }}</label></h5>

                        <div class="section">
                            <label for="faq-{{$partner->id}}">
                                <p>Website: <a style="color: black" href="{{ $partner->website }}" target="blank">{{ $partner->website }}</a></p>
                                <p> Email: <a style="color: black" href="mailto:{{ $partner->email }}">{{ $partner->email }}</a></p>

                            </label>
                            <p>{!! $partner->description !!}</p>
                        </div>
                    </div>
                    @empty
                    @endforelse


                    {{ $partners->links() }}

                </div>

            </div>
        </div>
    </div>
</div>


@endsection
