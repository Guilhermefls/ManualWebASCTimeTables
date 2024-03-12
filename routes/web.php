<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
});


Route::resource('postagens', PostController::class)->only([
    'index', 'show'
]);

Route::get('/postagens/autores/{id}',[PostController::class, 'buscarPorAutores'])->name('postagens.autores');
Route::get('/postagens/categorias/{id}',[PostController::class, 'buscarPorCategorias'])->name('postagens.categorias');
Route::get('/postagens/{id}/publicar',[PostController::class, 'publicar'])->name('postagens.publicar');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/*
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('home', 'home')->name('home');
});//*/
