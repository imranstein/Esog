@extends('layouts.components.index')
@section('model','Member's Course')
@section('count',$count)
@section('title','Member's Course')
@section('insert','Member's Course')

@section('content')
<livewire:member-course-table />
@endsection
