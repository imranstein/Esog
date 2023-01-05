@extends('layouts.components.form')
@section('model','Conference')
@section('title','Conference')
@section('back',route('conference.index'))
@section('type','Create')
@section('form')

<form method="POST" action="{{ route('conference.store') }}" enctype="multipart/form-data">
    @csrf


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title</strong>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description</strong>
            <textarea class="form-control" id="description" name="description" placeholder="Enter Description"></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Date</strong>
            <input type="date" class="form-control" id="date" name="date" placeholder="Enter Date">
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

@endsection --}}
