@extends('template')

@section('title')
    Home
@stop

@section('content')
    <h1>Meu Primeiro Blog com Laravel</h1>
    <ul>
        @foreach($posts as $post)
            <li>
                <h2><a href="#" >{{ $post['title'] }}</a></h2>
                <p><a href="#">{{ $post['content'] }}</a></p>
            </li>
        @endforeach
    </ul>
@stop
@stop