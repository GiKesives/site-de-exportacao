<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EspecificoController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\paineladminController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SobreNosController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/contato', [ContatoController::class, 'contatoPage'])->name('contato');

Route::post('/contato', [ContatoController::class, 'enviarFormulario'])->name('contato.submit');

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNosPage'])->name('sobre-nos');

Route::get('/painel', [paineladminController::class, 'painelPage'])->name('painel-adm');

Route::get('/faq', [FaqController::class, 'faqPage'])->name('faq');

Route::get('/', [HomeController::class, 'homePage'])->name('home');

Route::get('/produtos', [ProdutoController::class, 'produtoPage'])->name('produto');

Route::post('/produtos', [ProdutoController::class, 'store'])->name('produto');

Route::get('/cadastro', [ProdutoController::class, 'cadastroPage'])->name('cadastro');

Route::post('/cadastro', [ProdutoController::class, 'enviarFormProduto'])->name('cadastro.submit');

Route::get('/especificos', [EspecificoController::class, 'especificoPage'])->name('especifico');

Route::get('/perfil', [PerfilController::class, 'perfilPage'])->name('perfil');

Route::get('/carrinho', [CarrinhoController::class, 'carrinhoPage'])->name('carrinho');

Route::get('/compra', [CompraController::class, 'compraPage'])->name('compra');

Route::resource('categorias', CategoriaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'homePage'])->name('home');
