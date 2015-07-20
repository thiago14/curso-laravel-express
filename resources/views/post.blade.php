@extends('template')

@section('title')
    Post
@stop

@section('content')
    <h1>{{ $content['title'] }}</h1>
    <p>{{ $content['content'] }}</p>
    <br/>
    <br/>
    <a href="/" class="btn btn-large btn-primary">Voltar a Home</a>
@stop
@stop