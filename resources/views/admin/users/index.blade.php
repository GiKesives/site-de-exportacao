@extends('layouts.app')

@section('title')
<title>Users</title>
@endsection

@section('body')
<div class="container-fluid">
    <div class="row text-center">
        <p>Bem vindo Adm!</p>
        <p>Aqui você pode gerenciar tudo sobre o seu site!</p>
        <div class="col"></div>
        <div class="col-9">
            <h2>Tabela Users</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th class="align-middle">ID</th>
                        <th class="align-middle">Nome</th>
                        <th class="align-middle">Email</th>
                        <th class="align-middle">Senha</th>
                        <th class="align-middle">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id}} </td>
                            <td>{{ $user->name}} </td>
                            <td>{{ $user->email}} </td>
                            <td>{{ $user->password}} </td>
                            <td class="align-middle">
                                <a href="{{ route('users.destroy', $user->id) }}" onclick="event.preventDefault(); if(confirm('Tem certeza que deseja excluir esta categoria?')) document.getElementById('delete-form-{{ $user->id }}').submit();">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                                <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Sem User!</td>
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