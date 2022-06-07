<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\PassaroController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TudoController;
use App\Http\Controllers\AlunoController;

// Rota CRUD tabela usuarios para controle de acesso
Route::get('/', HomeController::class);


// Rota CRUD tabela passaros
Route::get('passaros', [PassaroController::class, 'index']);
Route::get('create', [PassaroController::class, 'create']);
Route::post('passaros', [PassaroController::class, 'store']);
Route::get('passaros/visualizar/{id}', [PassaroController::class, 'show']);
Route::get('passaros/edit/{id}', [PassaroController::class, 'edit']);
Route::put('passaros/update/{id}', [PassaroController::class, 'update']);
Route::get('passaros/modal/{id}', [PassaroController::class, 'modal']);
Route::delete('passaros/delete/{id}', [PassaroController::class, 'destroy']);

// Rota CRUD tabela produtos com name para as rotas

Route::get('produtos', [ProdutoController::class, 'index'])->name('produtos');
Route::get('createproduto', [ProdutoController::class, 'create'])->name('produtos.create');
Route::post('insertproduto', [ProdutoController::class, 'store'])->name('produtos.insert');
Route::get('produtos/{produto}/visualizar', [ProdutoController::class, 'show'])->name('produtos.visualizar');
Route::get('produtos/{produto}/edit', [ProdutoController::class, 'edit'])->name('produtos.edit');
Route::put('produtos/update/{produto}', [ProdutoController::class, 'update'])->name('produtos.atualizar');
Route::get('produtos/{produto}/delete', [ProdutoController::class, 'modal'])->name('produtos.modal');
Route::delete('produtos/{produto}', [ProdutoController::class, 'destroy'])->name('produtos.delete');

//Validação de Usuarios e CRUD Usuarios
// Validação 
Route::post('painel', [UsuarioController::class, 'login'])->name('usuarios.login');
Route::get('/', [UsuarioController::class, 'logout'])->name('usuarios.logout');

// CRUD Completo Usuarios
Route::get('usuarios', [UsuarioController::class, 'index'])->name('usuarios');
Route::get('createusuario', [UsuarioController::class, 'create'])->name('usuario.create');
Route::post('insertusuario', [UsuarioController::class, 'store'])->name('usuario.insert');
Route::get('usuarios/{usuario}/edit', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::put('usuarios/update/{usuario}', [UsuarioController::class, 'update'])->name('usuario.atualizar');
Route::get('usuarios/{usuario}/delete', [UsuarioController::class, 'modal'])->name('usuario.modal');
Route::delete('usuario/{usuario}', [UsuarioController::class, 'destroy'])->name('usuario.delete');

// CRUD TESTE para retornar varios dados;
 
Route::get('tudo',[TudoController::class,'retornatudo'])->name('retornartudo');

//CRUD Completo Alunos
Route::get('alunos',[AlunoController::class,'index'])->name('alunos');



