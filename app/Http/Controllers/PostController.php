<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Exibir a listagem do recurso.
     */
    public function index(Request $request)
    {
        $termoDeBusca = $request->filtro ?? "";
        //obter todas postagens do banco de dados
        $postagens = \App\Models\Post::publicados()
            ->when($termoDeBusca, function ($query, $termoDeBusca) {
                return $query->where('title', 'like', '%'.$termoDeBusca.'%');
            })
            ->paginate(3);

        return view('postagens.browse', compact('postagens'));
    }

    /**
     * Mostrar o formulário para criação de um novo recurso.
     */
    public function create()
    {
        //
    }

    /**
     * Armazenar um recurso recém-criado no armazenamento (BD).
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Exibir o recurso especificado.
     */
    public function show(string $id)
    {
       //obter a postagem do banco de dados com o id = $id
        $postagem = \App\Models\Post::find($id);

        return view('postagens.read', compact('postagem'));
    }

    /**
     * Mostrar o formulário para editar o recurso especificado.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Atualizar o recurso especificado no armazenamento.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remover o recurso especificado do armazenamento.
     */
    public function destroy(string $id)
    {
        //
    }

    public function instrucoes(){
        return view('postagens.instrucoes');
    }

    public function buscarPorAutores (Request $request, $id) {
        //obtem o value do input com o name="filtro"
        $termoDeBusca = $request->input('filtro');

        //obter a postagem do banco de dados com o id = $id
        $postagens = \App\Models\Post::publicados()
        ->when($termoDeBusca, function ($query, $termoDeBusca) {
            return $query->where('title', 'like', '%'.$termoDeBusca.'%');
        })
        ->where('author_id',$id)
        ->paginate();

        //return view('postagens.browse', compact('postagens'));
        return view('postagens.browse', compact('postagens'));
    }
    public function buscartestee (Request $request, $id) {
        //obtem o value do input com o name="filtro"
        $termoDeBusca = $request->input('filtro');

        //obter a postagem do banco de dados com o id = $id
        $postagens = \App\Models\Post::publicados()
        ->when($termoDeBusca, function ($query, $termoDeBusca) {
            return $query->where('title', 'like', '%'.$termoDeBusca.'%');
        })
        ->where('author_id',$id)
        ->paginate();

        //return view('postagens.browse', compact('postagens'));
        return response()->json($postagens);
    }

    public function buscarPorCategorias (Request $request, $id) {
        //obtem o value do input com o name="filtro"
        $termoDeBusca = $request->input('filtro');

        //obter a postagem do banco de dados com o id = $id
        $postagens = \App\Models\Post::publicados()
        ->when($termoDeBusca, function ($query, $termoDeBusca) {
            return $query->where('title', 'like', '%'.$termoDeBusca.'%');
        })
        ->where('author_id',$id)
        ->paginate();

        return view('postagens.browse', compact('postagens'));
    }

    public function mostrarPorCategoria($id) {

        $categoria=\App\Models\Category::find($id);

    $posts = \App\Models\Post::where('category_id', $id)->get();
    return view('postagens.categorias', compact('posts','categoria'));
    }

    public function mostrarPublicacao($slug){

        $post=\App\Models\Post::where('slug',$slug)->first();
        return view('postagens.publicacoes',compact('post'));
    }

    public function buscarPorConteudo (Request $request) {
        //obtem o value do input com o name="filtro"
        $termoDeBusca = $request->input('query');

        //obter a postagem do banco de dados com o id = $id
        $postagens = \App\Models\Post::publicados()
        ->when($termoDeBusca, function ($query, $termoDeBusca) {
            return $query->where(function($query) use ($termoDeBusca){
                $query->where('body', 'like', '%'.$termoDeBusca.'%')
                      ->orWhere('title', 'like', '%'.$termoDeBusca.'%');
            });
        })
        ->paginate();

        return view('manuais.listagem', compact('postagens'))->with('query', $termoDeBusca);
    }

    public function publicar ($id) {

        //obter a postagem do banco de dados com o id = $id
        $postagem = \App\Models\Post::find($id);
        $postagem->status = \App\Models\Post::PUBLICADO;
        $postagem->save();

        return redirect()->back();
    }
}
