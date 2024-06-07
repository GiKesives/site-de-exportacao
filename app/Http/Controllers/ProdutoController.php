<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function produtosPage()
    {
        $produtos = Produto::all();
        return view('app.produtos', compact('produtos'));
    }

    public function especificoPage($id)
    {
        $produto = Produto::findOrFail($id);
        return view('app.produtoEspecifico', compact('produto'));
    }

    public function create()
    {
        return view('admin.produtos.create');
    }
    
    public function index()
    {
        $produtos = Produto::all();

        return view('admin.produtos.index', ['produtos' => $produtos]);
    }


    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('admin.produtos.show', compact('produto'));
    }


    public function store(Request $request)
    {
        Produto::create([
            //nome da coluna no banco=> nome do campo do formulário
             'nome'=>$request->nome,
             'preco'=>$request->preco,
             'cor'=>$request->cor,
             'tamanho'=>$request->tamanho,
             'descricao'=>$request->descricao,
             'imagem'=>$request->imagem,
             'categoria_id'=>$request->categoria_id,
           ]);
       
           return back()->withSuccess('Cadastro realizado!');
    }

    public function edit(Produto $produto)
    {
        return view('admin.produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request, Produto $produto)
    {
        $produto->update([
            'nome'=>$request->nome,
            'preco'=>$request->preco,
            'cor'=>$request->cor,
            'tamanho'=>$request->tamanho,
            'descricao'=>$request->descricao,
            'imagem'=>$request->imagem,
            'categoria_id'=>$request->categoria_id,
        ]);

        return back()->withSuccess('');
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id); // Localize o produto pelo ID fornecido
        $produto->delete(); // Excluir o produto do banco de dados

        return back()->withSuccess('Produto excluído com sucesso');
    }
}
