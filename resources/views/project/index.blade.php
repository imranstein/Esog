@extends('layouts.components.index')
@section('model','Project')
@section('count',$count)
@section('title','Project')
@section('insert','Project')
@section('route',route('project.create'))

@section('content')
<livewire:project-table />
@endsection
