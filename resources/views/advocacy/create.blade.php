@extends('layouts.components.form')
@section('model','Advocacy')
@section('title','Advocacy')
@section('back',route('advocacy.index'))
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

<form method="POST" action="{{ route('advocacy.store') }}" enctype="multipart/form-data">
    @csrf


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title</strong>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Content</strong>
            <textarea class="form-control" id="content" name="content" placeholder="Enter content"></textarea>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div>
            <strong>Photo</strong>
            <input type="file" id="photo" name="photo" class="form-control">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div>
            <strong>Document</strong>
            <input type="file" name="document" class="form-control">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


</form>
@endsection
@section('script')
<script>
    ClassicEditor
        .create(document.querySelector('#content'))
        .catch(error => {
            console.error(error);
        });

</script>

@endsection
