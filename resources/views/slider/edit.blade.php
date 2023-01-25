@extends('layouts.components.form')
@section('model','Slider')
@section('title','Slider')
@section('back',route('slider.index'))
@section('type','Edit')
@section('form')

{{-- $table->string('title')->nullable();

             --}}

<form method="POST" action="{{ route('slider.update',$slider->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title</strong>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{$slider->title}}">
        </div>
    </div>

    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Content</strong>
            <textarea class="form-control" id="description" name="description" placeholder="Enter Content">{{$slider->description}}</textarea>
    </div>
    </div> --}}

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div>
            <strong>Photo</strong>
            <input type="file" name="image" class="form-control">

        </div>
        <div>
            <img src="{{asset($slider->image)}}" alt="" width="100px" height="100px">
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
