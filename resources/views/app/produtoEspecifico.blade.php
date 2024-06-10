@extends('layouts.app')

@section('title')
<title>Especifico</title>
@endsection

@section('body')
<style>
    .col-3 h2{
        font-size: 16px;
        font-weight: bold;
    }
    .col-3 p{
        font-size: 0.87rem;
    }
    .col-6 img{
        height: 400px;
        width: auto;
    }
    .col-4 img{
        height: 300px;
        width: auto;
    }
    .row h1{
        font-size: 20px;
        font-weight: bold;
        text-align: center;
    }
    .row h2{
        font-size: 16px;
        font-weight: bold;
        text-align: left;
    }
    .row p{
        font-size: 0.87rem;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-6">
            <img src="{{ asset($produto->imagem) }}" alt="{{ $produto->nome }}" />
        </div>
        <div class="col-4">
            <div class="container">
                <h2>Nome: {{ $produto->nome}}</h2>
                <hr />
                <h2>R${{ $produto->preco}}</h2>
                <hr />
                <h2>Cor: {{ $produto->cor}}</h2>
                <hr />
                <button type="button" class="btn btn-secondary">Comprar</button>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="container">
                        <h3>Descrição:</h3>
                        <p>{{ $produto->descricao}}</p>
                        <br>
                        <h3>Para camisetas personalizadas </h3>
                        <p>Em até 48 horas entraremos em contato para mais informações.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h1>Produtos Relacionados</h1>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                @foreach($produtosRelacionados as $produtoRelacionado)
                <div class="col-md-4">
                    <div class="related-product">
                        <img src="{{ asset($produtoRelacionado->imagem) }}" alt="{{ $produtoRelacionado->nome }}" />
                        <h3>{{ $produtoRelacionado->nome }}</h3>
                        <p>R$ {{ $produtoRelacionado->preco }}</p>
                        <a href="{{ route('produto.especifico', $produtoRelacionado->id) }}">
                            <button type="button" class="btn btn-secondary">Ver detalhes</button>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
