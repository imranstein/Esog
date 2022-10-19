@extends('layouts.components.index')
@section('model','News')
@section('count',$count)
@section('title','News')
@section('insert','News')
@section('route',route('news.create'))

@section('content')
<livewire:news-table />
@endsection
