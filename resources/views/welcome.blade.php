@extends('layouts.app')

@section('conteudo')
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

        <section class="px-3">
            <h1>Postagens</h1>
            <p class="lead">
                Esta é a página inicial do projeto, veja o exemplo de listagem de postagens. <br>
                A listagem de uma entidade geralmente estará no método index do controller e no voyager é o que chamamos de Browse.
            </p>
            <p class="lead">
                <a href="{{route('postagens.index')}}" class="btn btn-lg btn-light fw-bold border-white bg-white">Veja o exemplo</a>
            </p>
        </section>

    </div>
@endsection

@section('assets')
<style>
    /*
     * Globals
     */


    /* Custom default button */
    .btn-light,
    .btn-light:hover,
    .btn-light:focus {
        color: #333;
        text-shadow: none;
        /* Prevent inheritance from `body` */
    }


    /*
     * Base structure
     */

    body {
        text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
        box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
    }

    .cover-container {
        max-width: 42em;
    }


    /*
     * Header
     */

    .nav-masthead .nav-link {
        color: rgba(255, 255, 255, .5);
        border-bottom: .25rem solid transparent;
    }

    .nav-masthead .nav-link:hover,
    .nav-masthead .nav-link:focus {
        border-bottom-color: rgba(255, 255, 255, .25);
    }

    .nav-masthead .nav-link+.nav-link {
        margin-left: 1rem;
    }

    .nav-masthead .active {
        color: #fff;
        border-bottom-color: #fff;
    }
</style>
@endsection
