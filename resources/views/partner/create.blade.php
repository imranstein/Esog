@extends('layouts.components.form')
@section('model','Partner')
@section('title','Partner')
@section('back',route('partner.index'))
@section('type','Create')
@section('form')

{{-- $table->string('title')->nullable();

             --}}

<form method="POST" action="{{ route('partner.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{ old('') }}" required>
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
            <input type="url" class="form-control" id="website" name="website" placeholder="Enter Website" value="{{ old('') }}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email</strong>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ old('') }}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description</strong>
            <textarea class="form-control" id="description" name="description" placeholder="Enter Description"></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


</form>
@endsection
{{-- @section('script')
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });

</script>

{{-- Amharic body --}}
{{-- <script>
    ClassicEditor
        .create(document.querySelector('#content_am'))
        .catch(error => {
            console.error(error);
        });

</script> --}
@endsection --}}
