<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\paineladminController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

Route::get('/contato', [ContatoController::class, 'contatoPage'])->name('contato');

Route::post('/contato', [ContatoController::class, 'enviarFormulario'])->name('contato.submit');

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNosPage'])->name('sobre-nos');

Route::get('/painel', [paineladminController::class, 'painelPage'])->name('painel');

Route::get('/', [HomeController::class, 'homePage'])->name('home');

