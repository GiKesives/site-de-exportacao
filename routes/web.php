<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\paineladminController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ProdutoController;

use Illuminate\Support\Facades\Route;

Route::get('/contato', [ContatoController::class, 'contatoPage'])->name('contato');

Route::post('/contato', [ContatoController::class, 'enviarFormulario'])->name('contato.submit');

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNosPage'])->name('sobre-nos');

Route::get('/painel', [paineladminController::class, 'painelPage'])->name('painel-adm');

Route::get('/faq', [FaqController::class, 'faqPage'])->name('faq');


Route::get('/', [HomeController::class, 'homePage'])->name('home');

//Route::post('/contato', [ContatoController::class, 'enviarFormulario'])->name('contato.submit');

Route::get('/produtos', [ProdutoController::class, 'produtoPage'])->name('produto');

Route::get('/cadastro', [ProdutoController::class, 'cadastroPage'])->name('cadastro');

Route::post('/cadastro', [ProdutoController::class, 'enviarFormProduto'])->name('cadastro.submit');
