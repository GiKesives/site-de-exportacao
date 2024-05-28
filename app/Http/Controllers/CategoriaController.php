<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();

        return view('admin.categorias.index', ['categorias' => $categorias]);

    }

    public function create()
    {
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Categoria::create([
        //nome da coluna no banco=> nome do campo do formulário
        'nome_categoria'=>$request->nome_categoria,
        'descricao_categoria'=>$request->descricao_categoria,
        ]);

        return view('admin.categorias.create');

    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        return view('app.categorias', $categoria);
    }

    public function edit()
    {
        return view('admin.categorias.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
}
