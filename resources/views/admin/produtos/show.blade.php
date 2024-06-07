@extends('layouts.app')

@section('title')
<title>Detalhes do produto</title>
@endsection

@section('body')
<div class="container-fluid">
    <h1>Detalhes do Produto</h1>
    <div class="card">
        <div class="card-body">
            <h2>{{ $produto->nome }}</h2>
            <p>Preço: R$ {{ $produto->preco }}</p>
            <p>Cor do Produto: {{ $produto->cor }}</p>
            <p>Tamanho do Produto: {{ $produto->tamanho }}</p>
            <p>descricao do Produto: {{ $produto->descricao }}</p>
            <p>Imagem do Produto: {{ $produto->imagem }}</p>
            <p>Criado em: {{ $produto->created_at->format('d/m/Y H:i:s') }}</p>
            <p>Última atualização: {{ $produto->updated_at->format('d/m/Y H:i:s') }}</p>
            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-primary">Editar</a>
            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </div>
    </div>
</div>
@endsection