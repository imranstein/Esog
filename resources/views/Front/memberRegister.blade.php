@extends('Front.layouts.app')
@section('title','Contact Us')
@section('content')
{{-- <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-4 text-center text-lg-start">
                <h1 class="display-1 text-dark">Member</h1>
                {{-- <div class="pt-2">
                    <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Home</a>
                    <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Contact Us</a>
                </div> --}
            </div>
        </div>
    </div>
</div> --}}
<!-- Hero End -->


<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center position-relative">
            <div class="col-lg-8">
                <div class="bg-primary p-5 m-5 mb-0">
                    <form method="POST" action="{{ route('member.create') }}">
                        @csrf
                        <div class="row g-3">

                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;" name="name">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;" name="email">
                            </div>
                            <div class="col-12">
                                <input type="number" class="form-control bg-light border-0" placeholder="Your Phone" style="height: 55px;" name="phone">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Department" style="height: 55px;" name="department">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Designation" style="height: 55px;" name="designation">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Workplace" style="height: 55px;" name="workplace">
                            </div>
                            <div class="col-12">
                                <input type="file" class="form-control bg-light border-0" placeholder="Your Photo" style="height: 55px;" name="photo">
                            </div>

                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-primary p-5 m-5 mb-0">
                    <h3>Search for Members</h3>

                    <form method="POST" action="{{ route('member.create') }}">
                        @csrf
                        <div class="row g-3">

                            <div class="col-12">
                                <label>Name</label>
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;" name="name">
                            </div>
                            <div class="col-12">
                                <label>Email</label>
                                <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;" name="email">
                            </div>
                            <div class="col-12">
                                <label>Phone</label>
                                <input type="number" class="form-control bg-light border-0" placeholder="Your Phone" style="height: 55px;" name="phone">
                            </div>
                            <div class="col-12">
                                <label>Department</label>
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Department" style="height: 55px;" name="department">
                            </div>
                            <div class="col-12">
                                <label>Designation</label>
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Designation" style="height: 55px;" name="designation">
                            </div>


                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
