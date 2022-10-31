@extends('layouts.components.index')
@section('model','Guidelines')
@section('count',$count)
@section('title','Guidelines')
@section('insert','Guidelines')
@section('route',route('guidelines.create'))

@section('content')
<livewire:guidelines-table />
@endsection
