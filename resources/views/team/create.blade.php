@extends('layouts.components.form')
@section('model','Team')
@section('title','Team')
@section('back',route('team.index'))
@section('type','Create')
@section('form')

{{-- $table->string('type')->nullable();
            $table->string('designation')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('phone')->nullable(); --}}

<form method="POST" action="{{ route('team.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Type</strong>
            <select name="type" id="type" class="form-control">
                <option value="Staff">Staff</option>
                <option value="Executive">Executive</option>
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Designation</strong>
            <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter Designation" value="{{ old('designation') }}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Full Name</strong>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{ old('name') }}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email</strong>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ old('email') }}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div>
            <strong>Photo</strong>
            <input type="file" name="image" class="form-control">

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Facebook</strong>
            <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Enter Facebook" value="{{ old('facebook') }}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Twitter</strong>
            <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Enter Twitter" value="{{ old('twitter') }}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Linkedin</strong>
            <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Enter Linkedin" value="{{ old('linkedin') }}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Phone</strong>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone" value="{{ old('phone') }}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


</form>
@endsection
