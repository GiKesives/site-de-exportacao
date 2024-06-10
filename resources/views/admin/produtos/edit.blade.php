@extends('layouts.app')

@section('title')
<title>Alteração de produtos</title>
@endsection

@section('body')
<div class="row">
    <div class="col"></div>
    <div class="col">
        <h1>Editar Produto</h1>
        <form action="{{ route('produtos.update', $produto->id) }}" method="POST" class="mt-4 mb-4">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nome:</label><br>
            <input type="text" id="nome" name="nome" class="form-control" value="{{ $produto->nome }}"><br>
        </div>
        <div class="mb-3">
            <label class="form-label">Preço:</label><br>
            <input type="text" id="preco" name="preco" class="form-control" value="{{ $produto->preco }}"><br>
        </div>
        <div class="mb-3">
            <label for="form-label">Cor:</label><br>
            <input type="text" id="cor" name="cor" class="form-control" value="{{ $produto->cor }}"><br>
        </div>
        <div class="mb-3">
            <label for="descricao">Descrição:</label><br>
            <textarea class="form-control" id="descricao" name="descricao">{{ $produto->descricao }}</textarea><br>
        </div>
        <div class="mb-3">
        <label for="imagem">Imagem:</label><br>
        <input type="text" id="imagem" name="imagem" class="form-control" value="{{ $produto->imagem }}"><br>
        </div>

        <button type="submit" class="form-control btn btn-secondary">Salvar Alterações</button>
    </form>
    </div>
    <div class="col"></div>
</div>
@endsection