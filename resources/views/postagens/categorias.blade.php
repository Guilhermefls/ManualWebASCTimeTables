@extends('layouts.app')

@section('content')
    <h1>Categorias</h1>

    <ul>
        @foreach ($categories as $category)
            <li><a>nome:  </a>{{ $category->name}}<br><a>id: </a>{{ $category->id }}</li>
        @endforeach
    </ul>
@endsection
