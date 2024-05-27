@extends('layouts.app')

@section('title')
    <title>Cadastro</title>
@endsection

@section('body')
<div class="row">
    <div class="col"></div>
    <div class="col">
       <form action="{{ route('cadastro.submit') }}" method="post" class="mt-4 mb-4">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nome:</label>
                <input type="name" name="nome_produto" class="form-control" placeholder="Seu nome">
            </div>
            <div class="mb-3">
                <label class="form-label">Preço:</label>
                <input type="text" name="preco" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Cor:</label>
                <input type="text" name="cor" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Tamanho:</label>
                    <select name="subject" class="form-control">
                        <option value="">Selecione uma opção</option>
                        <option value="pequeno">P</option>
                        <option value="medio">M</option>
                        <option value="grande">G</option>
                    </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Descrição:</label>
                {{-- <input type="text" name="descricao" class="form-control"> --}}
                <textarea class="form-control" rows="3" name="descricao"></textarea>
            </div>
                <button type="submit" class="form-control btn btn-secondary">Cadastrar</button>
       </form>
    </div>
    <div class="col"></div>
</div>
@endsection


