@extends('layouts.app')

@section('conteudo')
    <section class="container p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Página inicial</a></li>
                <li class="breadcrumb-item"><a href="{{route('postagens.index')}}">Postagens</a></li>
                <li class="breadcrumb-item active" aria-current="page">Artigo</li>
            </ol>
        </nav>
    </section>

    <section class="container p-3">

        <h1 class="display-3 link-body-emphasis mb-1">{{ $postagem->title }}</h1>
        <p class="blog-post-meta">
            @isset($postagem->categoria)
                <span class="badge text-bg-secondary">{{ $postagem->categoria->name }}</span>
                <br>
            @endisset

            {{ $postagem?->criado_em_formatado }}
            @isset($postagem->autor)
                por <a href="#">{{ $postagem->autor->name }}</a>
            @endisset
        </p>

        <article class="blog-post">
            <img src="{{ Voyager::image($postagem->image) }}" alt="" class="blog-img" height="200">
            <p class="">
                {{ $postagem->except }}
            </p>
            <p class="">
                {!! $postagem->body !!}
            </p>
        </article>

    </section>
@endsection

@section('assets')
    <style>
        /* Pagination */
        .blog-pagination {
            margin-bottom: 4rem;
        }

        .blog-img {
            width: 100%;
            height: 10rem;
            object-fit: cover;
        }

        /*
         * Blog posts
         */
        .blog-post {
            margin-bottom: 4rem;
        }

        .blog-post-meta {
            margin-bottom: 1.25rem;
            color: #727272;
        }
    </style>
@endsection
