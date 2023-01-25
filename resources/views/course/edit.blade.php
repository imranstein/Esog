@extends('layouts.components.form')
@section('model','Course')
@section('title','Course')
@section('back',route('course.index'))
@section('type','Edit')
@section('form')

{{-- $table->string('title');
            $table->string('tags')->nullable();
            $table->text('description')->nullable();
            $table->string('author')->nullable();
            $table->string('document')->nullable();
            $table->string('video')->nullable();
            $table->boolean('is_paid')->default(false); --}}


<form method="POST" action="{{ route('course.update',$course->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title</strong>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{ $course->title }}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tags</strong>
            <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter Tags" value="{{ $course->tags }}">
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description</strong>
            <textarea class="form-control" id="description" name="description" placeholder="Enter Description">{{ $course->description }}</textarea>
        </div>
    </div>



    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Author</strong>
            <input type="text" class="form-control" id="author" name="author" placeholder="Enter author" value="{{ $course->author }}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div>
            <strong>Document</strong>
            <input type="file" name="document" class="form-control">
        </div>
        <a href="{{ $course->document }}" target="_blank">View Document</a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div>
            <strong>Video</strong>
            <input type="file" name="video" class="form-control">
        </div>
        {{-- open it in model --}}
        <a href="{{ $course->video }}" target="_blank">View Video</a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div>
            <strong>Length</strong>
            <input type="number" name="length" class="form-control" value="{{ $course->length }}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Is Paid</strong>
            <input type="checkbox" name="is_paid" class="form-check-inline" value="1" {{ $course->is_paid ? 'checked' : '' }}>
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
