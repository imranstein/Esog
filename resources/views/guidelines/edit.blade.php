@extends('layouts.components.form')
@section('model','Guidelines')
@section('title','Guidelines')
@section('back',route('guidelines.index'))
@section('type','Edit')
@section('form')


<form method="POST" action="{{ route('guidelines.update',$guideline->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title</strong>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{ $guideline->title }}" required>
        </div>
    </div>
    <div class="form-group">
        <strong>Group</strong>
        <select class="form-control" id="group" name="group">
            <option value="0">Select Group</option>
            <option value="1" {{ $guideline->group == 1 ? 'selected' : '' }}>Group 1</option>
            <option value="2" {{ $guideline->group == 2 ? 'selected' : '' }}>Group 2</option>
            <option value="3" {{ $guideline->group == 3 ? 'selected' : '' }}>Group 3</option>
            <option value="4" {{ $guideline->group == 4 ? 'selected' : '' }}>Group 4</option>
        </select>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description</strong>
            <textarea class="form-control" id="description" name="description" placeholder="Enter Description">
            {{ $guideline->description }}
            </textarea>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Author</strong>
            <input type="text" class="form-control" id="author" name="author" placeholder="Enter author" value="{{ $guideline->author }}">
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
            <input type="checkbox" name="is_paid" value="1" {{ $guideline->is_paid ? 'checked' : '' }} class="form-check-inline">
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
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });

</script>

@endsection
