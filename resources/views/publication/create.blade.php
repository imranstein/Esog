@extends('layouts.components.form')
@section('model','Publication')
@section('title','Publication')
@section('back',route('publication.index'))
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

<form method="POST" action="{{ route('publication.store') }}" enctype="multipart/form-data">
    @csrf


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title</strong>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tags</strong>
            <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter Tags">
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description</strong>
            <textarea class="form-control" id="description" name="description" placeholder="Enter Description"></textarea>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div>
            <strong>Image</strong>
            <input type="file" name="image" class="form-control">

        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Author</strong>
            <input type="text" class="form-control" id="author" name="author" placeholder="Enter author">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div>
            <strong>Document</strong>
            <input type="file" name="document" class="form-control">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Is Paid</strong>
            <input type="checkbox" class="form-control" id="is_paid" name="is_paid" placeholder="Enter is_paid">
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
