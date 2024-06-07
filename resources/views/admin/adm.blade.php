@extends('layouts.app')

@section('title')
<title>Página Adm</title>
@endsection

@section('body')
{{-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Painel de Administração</h1>
            <p>Bem-vindo ao painel de administração do seu sistema.</p>
            <p>Aqui você pode realizar várias operações de administração, como gerenciar produtos, categorias, usuários, etc.</p>
            <div class="mb-3">
                <a href="{{ route('produtos.create') }}" class="btn btn-primary">Criar Novo Produto</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>
                            <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> --}}

 <div class="container-fluid">
    <div class="row text-center">
        <p>Bem vindo Adm!</p>
        <p>Aqui você pode gerenciar tudo sobre o seu site!</p>
        <div class="col">
            <a href="{{ route('produtos.create') }}" class="btn btn-primary">Cadastrar Produtos</a>
            <br>
            <br>
            <a href="{{ route('categorias.create') }}" class="btn btn-primary">Cadastrar Categorias</a>
            <br>
            <br>
        </div>
        <div class="col">
            <a href="{{ route('produtos.index') }}" class="btn btn-primary">Gerenciar Produtos</a>
            <br>
            <br>
            <a href="{{ route('categorias.index') }}" class="btn btn-primary">Gerenciar Categorias</a>
            <br>
            <br>
            <a href="{{ route('users.index') }}" class="btn btn-primary">Gerenciar Users</a>
        </div>
    </div>
</div> 

@endsection