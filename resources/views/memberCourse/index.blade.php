@extends('layouts.components.index')
@section('model','Member Course')
@section('count',$count)
@section('title','Member Course')
@section('insert','Member Course')

@section('content')
<livewire:member-course-table />
@endsection
