@extends('layouts.app')

@section('title')
<title>Alteração de categorias</title>
@endsection

@section('body')
<div class="row">
    <div class="col"></div>
    <div class="col">
        <h1>Editar Categoria</h1>
        <form action="{{ route('categorias.update', $categoria->id) }}" method="POST" class="mt-4 mb-4">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nome:</label><br>
            <input type="text" id="nome_categoria" name="nome_categoria" class="form-control" value="{{ $categoria->nome_categoria }}"><br>
        </div>
        <div class="mb-3">
            <label class="form-label">Descrição:</label><br>
            <textarea class="form-control" id="descricao_categoria" name="descricao_categoria">{{ $categoria->descricao_categoria }}</textarea><br>
        </div>

        <button type="submit" class="form-control btn btn-secondary">Salvar Alterações</button>
    </form>
    </div>
    <div class="col"></div>
</div>
@endsection