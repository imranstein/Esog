@extends('layouts.components.index')
@section('model','Course')
@section('count',$count)
@section('title','Course')
@section('insert','Course')
@section('route',route('course.create'))

@section('content')
<livewire:course-table />
@endsection
