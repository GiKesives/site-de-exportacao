@extends('layouts.app')

@section('title')
    <title>Carrinho Vazio</title>
@endsection

@section('body')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>O seu carrinho está vazio</h1>
            <p>Adicione produtos ao seu carrinho para continuar.</p>
            <a href="{{ route('home') }}" class="btn btn-secondary">Voltar à página inicial</a>
        </div>
    </div>
</div>
@endsection
