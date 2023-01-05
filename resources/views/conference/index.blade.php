@extends('layouts.components.index')
@section('model','Conference')
@section('count',$count)
@section('title','Conference')
@section('insert','Conference')
@section('route',route('conference.create'))

@section('content')
<livewire:conference-table />
@endsection
