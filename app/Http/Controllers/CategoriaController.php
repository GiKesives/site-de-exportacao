<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    
    public function create()
    {
        return view('admin.categorias.create');
    }


    public function index()
    {
        $categorias = Categoria::all();

        return view('admin.categorias.index', ['categorias' => $categorias]);
    }


     public function show($id)
     {
         $categoria = Categoria::findOrFail($id);
         return view('admin.categorias.show', compact('categoria'));
     }


    public function store(Request $request)
    {

        Categoria::create([
        //nome da coluna no banco=> nome do campo do formulário
        'nome_categoria'=>$request->nome_categoria,
        'descricao_categoria'=>$request->descricao_categoria,
        ]);

        return back()->withSuccess('Cadastro realizado!');

    }


    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.edit', ['categoria' => $categoria]);
    }


    public function update(Request $request, Categoria $categoria)
    {
        $categoria->update([
            'nome_categoria'=>$request->nome_categoria,
            'descricao_categoria'=>$request->descricao_categoria,
        ]);
    }


    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id); // Localize o produto pelo ID fornecido
        $categoria->delete(); // Excluir o produto do banco de dados

        return back()->withSuccess('Categoria excluída com sucesso');
    }
}
