@extends('layouts.app')

@section('content')
    <h2>Detalhes do post:</h2>
    <p>Titulo:{{$post->title}}</p>
    <img src="{{Voyager::image($post->image)}}" alt="" style="width: 300px; height: 300px"/>
    <p>Id:{{$post->id}}</p>
    <p>Corpo:{{$post->excerpt}}</p>


@endsection