@extends('layouts.app')

@section('title')
@endsection

@section('body')
<form action="{{ route('categorias.store')}}" method="POST">
    @csrf
    <div>
        <label class="form-label">Nome:</label>
        <input type="name" name="nome_categoria" class="form-control" placeholder="Seu nome">
    </div>
    <div>
        <label class="form-label">Descrição:</label>
        <input type="name" name="descricao_categoria" class="form-control">
        <button type="submit" class="form-control btn btn-secondary">Cadastrar</button>
    </div>
</form>
@endsection