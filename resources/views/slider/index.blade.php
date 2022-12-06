@extends('layouts.components.index')
@section('model','Slider')
@section('count',$count)
@section('title','Slider')
@section('insert','Slider')
@section('route',route('slider.create'))

@section('content')
<livewire:slider-table />
@endsection
