@extends('layouts.components.index')
@section('model','Publication')
@section('count',$count)
@section('title','Publication')
@section('insert','Publication')
@section('route',route('publication.create'))

@section('content')
<livewire:publication-table />
@endsection
