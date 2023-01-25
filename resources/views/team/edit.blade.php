@extends('layouts.components.form')
@section('model','Team')
@section('title','Team')
@section('back',route('team.index'))
@section('type','Edit')
@section('form')


<form method="POST" action="{{ route('team.update',$team->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Type</strong>
            <select name="type" id="type" class="form-control">
                {{-- selected if it is already choosed --}}
                <option value="Staff" {{ $team->type == 'Staff' ? 'selected' : '' }}>Staff</option>
                <option value="Executive" {{ $team->type == 'Executive' ? 'selected' : '' }}>Executive</option>
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Designation</strong>
            <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter Designation" value="{{ $team->designation }}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Full Name</strong>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{ $team->name }}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email</strong>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ $team->email }}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div>
            <strong>Photo</strong>
            <input type="file" name="image" class="form-control">
        </div>
        <img src="{{ asset($team->image) }}" alt="" width="100px" height="100px">
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Facebook</strong>
            <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Enter Facebook" value="{{ $team->facebook }}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Twitter</strong>
            <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Enter Twitter" value="{{ $team->twitter }}">
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Linkedin</strong>
                <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Enter Linkedin" value="{{ $team->linkedin }}">

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone</strong>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone" value="{{ $team->phone }}">

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


</form>
@endsection
