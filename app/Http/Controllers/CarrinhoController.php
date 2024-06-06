<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function carrinhoPage()
    {
        return view('app.carrinho');
    }

    public function formCompra()
    {
        return view('app.compra');
    }
    
    public function finalizarCompra(Request $request)
    {

    return view('app.compraFinalizada');
    }
}
