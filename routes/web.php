<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/* REVISAR
Route::get('/professores', function () {
    return view('manuais.professores');
})->name('professores');
*/

Route::get('/categorias', [CategoryController::class, 'index'])->name('categorias');

Route::get('/postagens/manuais',[PostController::class, 'buscarPorConteudo'])->name('postagens.buscar');

Route::resource('postagens', PostController::class)->only([
    'index', 'show'
]);

Route::get('/postagens/autores/{id}',[PostController::class, 'buscarPorAutores'])->name('postagens.autores');
Route::get('/postagens/categorias/{id}',[PostController::class, 'buscarPorCategorias'])->name('postagens.categorias');
Route::get('/postagens/{id}/publicar',[PostController::class, 'publicar'])->name('postagens.publicar');

Route::get('/restricoes/{id}', [PostController::class, 'mostrarPorCategoria'])->whereNumber('id')->name('restricoes.mostrarPorCategoria');
Route::get('/restricoes/{slug}', [PostController::class, 'mostrarPublicacao'])->name('restricoes.mostrarPublicacao');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


