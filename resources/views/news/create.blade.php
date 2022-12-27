@extends('layouts.components.form')
@section('model','News')
@section('title','News')
@section('back',route('news.index'))
@section('type','Create')
@section('form')

{{-- $table->string('title')->nullable();

             --}}

<form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title</strong>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
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
            <strong>Description</strong>
            <textarea class="form-control" id="description" name="description" placeholder="Enter Description"></textarea>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Caption</strong>
            <input type="text" class="form-control" id="caption" name="caption" placeholder="Enter caption">
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
