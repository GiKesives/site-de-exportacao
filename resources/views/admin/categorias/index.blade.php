@extends('layouts.app')

@section('title')
<title>Listagem de Categorias</title>
@endsection

@section('body')
<div class="container-fluid">
    <div class="row text-center">
        <p>Bem vindo Adm!</p>
        <p>Aqui você pode gerenciar tudo sobre o seu site!</p>
        <div class="col"></div>
        <div class="col-9">
            <h2>Tabela Categorias</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th class="align-middle">ID</th>
                        <th class="align-middle">Nome</th>
                        <th class="align-middle">Descrição</th>
                        <th class="align-middle">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categorias as $categoria)
                        <tr>
                            <td class="align-middle">{{ $categoria->id}} </td>
                            <td class="align-middle">{{ $categoria->nome_categoria}} </td>
                            <td class="align-middle">{{ $categoria->descricao_categoria}} </td>
                            <td>
                                <a href="{{ route('categorias.show', $categoria->id) }}" class="btn btn-info">Ver</a>
                                <hr>
                                <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning">Editar</a>
                                <hr>
                                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                            {{-- <td class="align-middle">
                                <a href="{{ route('categorias.destroy', $categoria->id) }}" onclick="event.preventDefault(); if(confirm('Tem certeza que deseja excluir esta categoria?')) document.getElementById('delete-form-{{ $categoria->id }}').submit();">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                                <form id="delete-form-{{ $categoria->id }}" action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td> --}}
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Sem categoria!</td>
                        </tr>
                    @endforelse
                    {{-- <tr>
                        <td colspan="7" class="text-end">
                            <a href="#" class="btn btn-secondary">Finalizar compra</a>
                            <a href="#" class="btn btn-secondary">Ver mais Produtos</a>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection

{{-- @extends('layouts.app')

@section('title')
@endsection

@section('body')
<table>
    <thead>
    <th>#ID</th>
    <th>Nome</th>
    <th>Descrição</th>
    </thead>
    <tbody>
        @forelse ($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id}} </td>
                <td>{{ $categoria->nome_categoria}} </td>
                <td>{{ $categoria->descricao_categoria}} </td>
            </tr>
        @empty
            <tr>
                <td>Sem categoria!</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection --}}