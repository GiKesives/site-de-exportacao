<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function enviarFormProduto(Request $request){
        dd($request->all());

        Produto::create([
     //nome da coluna no banco=> nome do campo do formulário
      'nome_produto'=>$request->nome_produto,
      'preco'=>$request->preco,
      'cor'=>$request->cor,
      'tamanho'=>$request->tamanho,
      'descricao'=>$request->descricao,
    ]);
    }

    public function produtoPage()
    {
        return view('app.produtos');
    }

    public function cadastroPage()
    {
        return view('app.cadastro');
    }

    public function store(Request $request)
    {
        
    }
}
