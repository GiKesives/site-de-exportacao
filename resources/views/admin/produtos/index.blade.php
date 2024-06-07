@extends('layouts.app')

@section('title')
    <title>Listagem de Produtos</title>
@endsection

@section('body')
<div class="container-fluid">
    <div class="row text-center">
        <p>Bem vindo Adm!</p>
        <p>Aqui você pode gerenciar tudo sobre o seu site!</p>
        <div class="col"></div>
        <div class="col-9">
            <h2>Tabela Produtos</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th class="align-middle">ID</th>
                        <th class="align-middle">Nome</th>
                        <th class="align-middle">Preço</th>
                        <th class="align-middle">Cor</th>
                        <th class="align-middle">Tamanho</th>
                        <th class="align-middle">Descrição</th>
                        <th class="align-middle">Imagem</th>
                        <th class="align-middle">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($produtos as $produto)
                        <tr>
                            <td class="align-middle">{{ $produto->id }}</td>
                            <td class="align-middle">{{ $produto->nome }}</td>
                            <td class="align-middle">{{ $produto->preco }}</td>
                            <td class="align-middle">{{ $produto->cor }}</td>
                            <td class="align-middle">{{ $produto->tamanho }}</td>
                            <td class="align-middle">{{ $produto->descricao }}</td>
                            <td class="align-middle">{{ $produto->imagem }}</td>
                            <td>
                                <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-info">Ver</a>
                                <hr>
                                <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning">Editar</a>
                                <hr>
                                <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">Sem Produto!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection