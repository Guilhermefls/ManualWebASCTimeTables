@extends('layouts.app')

@section('content')
    <h1>{{$categoria->name}}</h1>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{route('restricoes.mostrarPublicacao',['slug'=>$post->slug])}}"><h2>{{ $post->title }}</h2></a>
                <span class="image main"><img src="{{Voyager::image($post->image)}}" alt=""  style="width: 300px; height: 300px"/></span>
                <h2>{{ $post->excerpt }}</h2>
            </li>
            <hr>
        @endforeach
    </ul>
@endsection
