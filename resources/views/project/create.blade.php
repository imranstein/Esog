@extends('layouts.components.form')
@section('model','Project')
@section('title','Project')
@section('back',route('project.index'))
@section('type','Create')
@section('form')

{{-- $table->string('title')->nullable();

             --}}

<form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
    @csrf
    {{-- 'title',
        'objective',
        'funded_by',
        'sites',
        'start_date',
        'end_date',
        'description', --}}

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title</strong>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value={{ old('title') }}>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Objective</strong>
            <input type="text" class="form-control" id="objective" name="objective" placeholder="Enter Objective" value="{{ old('objective') }}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Funded By</strong>
            <input type="text" class="form-control" id="funded_by" name="funded_by" placeholder="Enter Funded By" value="{{ old('funded_by') }}">

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Sites</strong>
            <input type="text" class="form-control" id="sites" name="sites" placeholder="Enter Sites" value="{{ old('sites') }}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Start Date</strong>
            <input type="date" class="form-control" id="start_date" name="start_date" placeholder="Enter Start Date">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>End Date</strong>
            <input type="date" class="form-control" id="end_date" name="end_date" placeholder="Enter End Date">
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
