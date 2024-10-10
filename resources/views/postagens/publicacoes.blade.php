@extends('layouts.app')


@section('content')
    <h4>Detalhes do post:</h4>
    <div>
        <h2>{{$post->title}}:</h2>
        <p><b>Descrição:</b>{{$post->excerpt}}</p>
    </div>
    <!--<img src="{{Voyager::image($post->image)}}" alt="" style="width: 300px; height: 300px"/>-->
    <hr>
    <div>

        {!! $post->getConteudo() !!}
    </div>


@endsection