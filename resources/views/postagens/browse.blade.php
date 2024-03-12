@extends('layouts.app')

@section('conteudo')

    <section class="container p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Página inicial</a></li>
                <li class="breadcrumb-item active" aria-current="page">Postagens</li>
            </ol>
        </nav>
    </section>

    <section class="container p-3">

        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('postagens.index')}}">
                <i class="fa-solid fa-book"></i>
                Postagens
              </a>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar por titulo" aria-label="Search" name="filtro" value="{{request('filtro')}}">
                <button class="btn btn-outline-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
              </form>
            </div>
        </nav>

        @forelse ($postagens as $postagem)
            <article class="blog-post">
                <h2 class="display-6 link-body-emphasis my-3">
                    <a class="nav-link text-dark" href="{{ route('postagens.show', [$postagem]) }}">
                        {{ $postagem->title }}
                    </a>
                </h2>
                <p class="blog-post-meta">
                    @isset($postagem->categoria)
                        <a  href="{{ route('postagens.categorias', ['id' => $postagem->category_id]) }}" class="nav-link badge text-bg-secondary">{{ $postagem->categoria->name }}</a>
                        <br>
                    @endisset

                    {{ $postagem?->criado_em_formatado }}
                    @isset($postagem->autor)
                        por <a href="{{ route('postagens.autores', ['id' => $postagem->author_id]) }}">{{ $postagem->autor->name }}</a>
                    @endisset

                </p>
                {{ $postagem->excerpt }}
            </article>
        @empty
        @endforelse
        {{ $postagens->links('pagination::bootstrap-4') }}

    </section>
@endsection

@section('assets')
    <style>
        /* Pagination */
        .blog-pagination {
            margin-bottom: 4rem;
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
