@extends('layouts.app')
@section('content')
@foreach ($postagens as $manual)
<section>
    <header class="main">
        <a href="{{route("restricoes.mostrarPublicacao",["slug"=>$manual->slug])}}"><h2>{{$manual->title}}</h2></a>
    </header>
    <p>{{$manual->excerpt}}</p>
</section>

@endforeach
@endsection