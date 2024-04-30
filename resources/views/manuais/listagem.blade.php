@extends('layouts.app')
@section('content')
@foreach ($postagens as $manual)
<section>
    <header class="main">
        <h1>{{$manual->title}}</h1>
    </header>

    <span class="image main"><img src="{{Voyager::image($manual->image)}}" alt="" /></span>

    <p>{{$manual->excerpt}}</p>
</section>

@endforeach
@endsection