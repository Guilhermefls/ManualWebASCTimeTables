@extends('layouts.app')

@section('content')
    <h1>{{$categoria->name}}</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{route('restricoes.mostrarPublicacao',['slug'=>$post->slug])}}"><h2>{{ $post->title }}</h2></a>
                <p>{{ $post->excerpt }}</p>
            </li>
            <hr>
        @endforeach
    </ul>
@endsection
