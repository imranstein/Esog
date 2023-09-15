@extends('Front.layouts.app')
@section('title','Annual Conference')
@section('content')
<div class="about-us-area section-padding-0-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-content">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>Annual Conferences</h2>

                    </div>
                    <nav class="accordion arrows">
                        @forelse($conferences as $conference)
                        <input type="radio" name="accordion" id="cb{{ $conference->id }}" />
                        <section class="box">
                            <label class="box-title" for="cb{{ $conference->id }}">{{ $conference->title }}</label>
                            <label class="box-close" for="acc-close"></label>
                            <div class="box-content">
                                <label style="color:#000;font-weight: 500;">Conference Date : </label>
                                {{ $conference->date }}
                                <br>
                                {!! $conference->description !!}</div>
                        </section>
                        @empty
                        @endforelse
                        <input type="radio" name="accordion" id="acc-close" />
                    </nav>
                    {{ $conferences->links()}}


                </div>
            </div>
        </div>
    </div>
</div>


@endsection
