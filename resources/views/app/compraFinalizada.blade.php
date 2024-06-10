@extends('layouts.app')

@section('title')
    <title>Compra Finalizada</title>
@endsection

@section('body')
    <div class="container">
        <h2>Compra Finalizada</h2>
        <p>Sua compra foi realizada com sucesso! Entraremos em contato com você dentro de um prazo de 24 horas.</p>
        <a href="{{ route('home') }}" class="btn btn-secondary">Voltar para a página inicial</a>
    </div>
@endsection
