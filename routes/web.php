<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EspecificoController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\paineladminController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProdutoPageController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/contato', [ContatoController::class, 'contatoPage'])->name('contato');

Route::post('/contato', [ContatoController::class, 'enviarFormulario'])->name('contato.submit');

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNosPage'])->name('sobre-nos');

Route::get('/painel', [paineladminController::class, 'painelPage'])->name('painel-adm');

Route::get('/faq', [FaqController::class, 'faqPage'])->name('faq');

Route::get('/', [HomeController::class, 'homePage'])->name('home');

Route::get('/especificos', [EspecificoController::class, 'especificoPage'])->name('especifico');

Route::get('/carrinho/{id}', [CarrinhoController::class, 'carrinhoPage'])->name('carrinho');

Route::resource('categorias', CategoriaController::class);

Route::get('/produtoss', [ProdutoController::class, 'produtosPage'])->name('produtos.cliente');
Route::get('/produto/{id}', [ProdutoController::class, 'especificoPage'])->name('produto.especifico');
Route::resource('produtos', ProdutoController::class);

Route::resource('users', UserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'homePage'])->name('home');

Route::group(['middleware' => 'auth'], function () {
Route::get('/admin', [App\Http\Controllers\PainelAdminController::class, 'index'])->name('admin.adm');
});

