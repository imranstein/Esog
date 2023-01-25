@extends('layouts.components.form')
@section('model','Partner')
@section('title','Partner')
@section('back',route('partner.index'))
@section('type','Edit')
@section('form')
<form method="POST" action="{{ route('partner.update',$partner->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required value="{{ $partner->name }}">
        </div>
    </div>

    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div>
            <strong>logo</strong>
            <input type="file" name="logo" class="form-control">

        </div>
    </div> --}}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Website</strong>
            <input type="url" class="form-control" id="website" name="website" placeholder="Enter Website" value="{{ $partner->website }}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email</strong>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ $partner->email }}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description</strong>
            <textarea class="form-control" id="description" name="description" placeholder="Enter Description">
            {{ $partner->description }}
            </textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


</form>

@endsection
