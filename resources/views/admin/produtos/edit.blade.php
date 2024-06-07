@extends('layouts.app')

@section('title')
<title>Alteração de produtos</title>
@endsection

@section('body')
<h1>Editar Produto</h1>
    <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" value="{{ $produto->nome }}"><br>

        <label for="preco">Preço:</label><br>
        <input type="text" id="preco" name="preco" value="{{ $produto->preco }}"><br>

        <label for="cor">Cor:</label><br>
        <input type="text" id="cor" name="cor" value="{{ $produto->cor }}"><br>

        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao">{{ $produto->descricao }}</textarea><br>

        <label for="imagem">Imagem:</label><br>
        <input type="text" id="imagem" name="imagem" value="{{ $produto->imagem }}"><br>

        <button type="submit">Salvar Alterações</button>
    </form>
@endsection