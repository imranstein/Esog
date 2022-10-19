@extends('layouts.components.index')
@section('model','Teams')
@section('count',$count)
@section('title','Teams')
@section('insert','Team')
@section('route',route('team.create'))

@section('content')
<livewire:team-table />
@endsection
