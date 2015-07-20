@extends('template')

@section('title')
    Sobre o Blog
@stop

@section('content')
    <h1>{{ $content['title'] }}</h1>
    <p>{{ $content['content'] }}</p>
@stop
@stop