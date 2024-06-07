@extends('layouts.app')

@section('title')
<title>Detalhes da categoria</title>
@endsection

@section('body')
<div class="container-fluid">
    <h1>Detalhes da categoria</h1>
    <div class="card">
        <div class="card-body">
            <h2>{{ $categoria->nome_categoria }}</h2>
            <p>Descrição: {{ $categoria->descricao_categoria }}</p>
            <p>Criado em: {{ $categoria->created_at->format('d/m/Y H:i:s') }}</p>
            <p>Última atualização: {{ $categoria->updated_at->format('d/m/Y H:i:s') }}</p>
            <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-primary">Editar</a>
            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </div>
    </div>
</div>
@endsection