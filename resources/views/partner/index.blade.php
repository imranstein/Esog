@extends('layouts.components.index')
@section('model','Partner')
@section('count',$count)
@section('title','Partner')
@section('insert','Partner')
@section('route',route('partner.create'))

@section('content')
<livewire:partner-table />
@endsection
