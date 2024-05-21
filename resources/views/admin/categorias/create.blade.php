@extends('layouts.app')

@section('body')

<form action="{{ route('categorias')}}" method="POST">
    <div>
        <label class="form-label">Nome:</label>
        <input type="name" name="nome" class="form-control" placeholder="Seu nome">
    </div>
    <div>
        <label class="form-label">Descrição:</label>
        <input type="name" name="descricao" class="form-control">
    </div>
</form>
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
                <td>{{ $categoria->nome}} </td>
                <td>{{ $categoria->descricao}} </td>
            </tr>
        @empty
            <tr>
                <td>Não deu certo BURRÃO!</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection