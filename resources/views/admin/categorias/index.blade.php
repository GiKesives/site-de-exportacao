@extends('layouts.app')

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
                <td>{{ $categoria->nome}} </td>
                <td>{{ $categoria->descricao}} </td>
            </tr>
        @empty
            <tr>
                <td>Sem categoria!</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection