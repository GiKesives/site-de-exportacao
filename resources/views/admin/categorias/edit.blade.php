@extends('layouts.app')

@section('title')
<title>Alteração de categorias</title>
@endsection

@section('body')
<h1>Editar Categoria</h1>
    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome_categoria">Nome:</label><br>
        <input type="text" id="nome_categoria" name="nome_categoria" value="{{ $categoria->nome_categoria }}"><br>

        <label for="descricao_categoria">Descrição:</label><br>
        <textarea id="descricao_categoria" name="descricao_categoria">{{ $categoria->descricao_categoria }}</textarea><br>

        <button type="submit">Salvar Alterações</button>
    </form>
@endsection