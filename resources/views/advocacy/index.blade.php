@extends('layouts.components.index')
@section('model','Advocacy')
@section('count',$count)
@section('title','Advocacy')
@section('insert','Advocacy')
@section('route',route('advocacy.create'))

@section('content')
<livewire:advocacy-table />
@endsection
