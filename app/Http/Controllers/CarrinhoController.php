<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

class CarrinhoController extends Controller
{
    public function carrinhoPage($id = null)
    {
        if ($id) {
                // Recupere os detalhes do produto com base no ID fornecido
            $produto = Produto::findOrFail($id);

            // Você também pode passar outros dados relevantes do produto, se necessário

            // Retorne a view carrinho.blade.php com os detalhes do produto
            return view('app.carrinho', compact('produto'));
        } else {
            return view('app.carrinhoVazio');
        }
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
    


