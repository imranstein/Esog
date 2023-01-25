@extends('layouts.components.form')
@section('model','Publication')
@section('title','Publication')
@section('back',route('publication.index'))
@section('type','Edit')
@section('form')


<form method="POST" action="{{ route('publication.update',$publication->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title</strong>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{ $publication->title }}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tags</strong>
            <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter Tags" value="{{ $publication->tags }}">
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description</strong>
            <textarea class="form-control" id="description" name="description" placeholder="Enter Description">
            {{ $publication->description }}
            </textarea>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div>
            <strong>Image</strong>
            <input type="file" name="image" class="form-control">
        </div>
        <img src="{{ asset($publication->image) }}" alt="" width="100px" height="100px">
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Author</strong>
            <input type="text" class="form-control" id="author" name="author" placeholder="Enter author" value="{{ $publication->author }}">
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
            <input type="checkbox" class="form-check-inline" id="is_paid" name="is_paid" placeholder="Enter is_paid" value="1" {{ $publication->is_paid == 1 ? 'checked' : '' }}>
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
