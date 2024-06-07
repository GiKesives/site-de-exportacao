
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
    .col-3 img{
        height: 150px;
        width: auto;
    }
    .col-4 img{
        height: 320px;
        width: auto;
    }
    .col-6 img{
        height: 550px;
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

{{-- <div class="container">
    <div class="row">
        <div class="col-3">
            <img src="{{ asset($produto->imagem) }}" alt="{{ $produto->nome }}" />
        </div>
        <div class="col-6">
            <h2>{{ $produto->nome }}</h2>
            <p>Preço: R$ {{ $produto->preco }}</p>
            <h2>Cores disponíveis:</h2>
            <p>{{ $produto->cor }}</p>
            <h2>Tamanho:</h2>
            <p>{{ $produto->tamanho }}</p>
            <a href="{{ route('carrinho', ['id' => $produto->id]) }}" class="btn btn-secondary">Adicionar ao Carrinho</a>
                {{-- <button type="button" class="btn btn-secondary">Comprar</button> --}}
            {{-- </a>
            <div class="container">
                <h2>Descrição</h2>
                <p>{{ $produto->descricao }}</p>
            </div>
        </div>
    </div>
</div> --}} 

 <div class="container">
    <div class="row">
        <div class="col-3">
            <img src={{ asset($produto->imagem) }} alt={{ $produto->nome}}/>
            <br>
            <br>
            <img src={{ asset($produto->imagem) }} alt={{ $produto->nome}}/>
        </div>
        <div class="col-6">
            <img src={{ asset($produto->imagem) }} alt={{ $produto->nome}} />
        </div>
        <div class="col-3">
            <div class="container">
                <h2>{{ $produto->nome}}</h2>
                <hr />
                <h2>{{ $produto->preco}}</h2>
                <hr />
                <h2>{{ $produto->cor}}</h2>
                <hr />
                <h2>{{$produto->descricao}}</h2>
                <hr />
                <a href="{{ route('carrinho', ['id' => $produto->id]) }}">
                <button type="button" class="btn btn-secondary">Comprar</button>
                </a>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="container">
                        <h2>Descrição:</h2>
                        <p>{{ $produto->descricao}}</p>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h1>Produtos Relacionados</h1>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="col-4">
                    <a href="{{ route('especifico')}}">
                    <img src="https://http2.mlstatic.com/D_NQ_NP_816694-MLB54867165128_042023-O.webp" alt="Product One" />
                    </a>
                    <br>
                    <br>
                    <h2>Camiseta ""</h2>
                    <h2 >R$ Preço</h2>
                    <hr />
                    <button type="button" class="btn btn-secondary">Comprar</button>
                </div>
                <div class="col-4">
                    <a href="{{ route('especifico')}}">
                    <img src="https://http2.mlstatic.com/D_NQ_NP_816694-MLB54867165128_042023-O.webp" alt="Product One" />
                    </a>
                    <br>
                    <br>
                    <h2>Camiseta ""</h2>
                    <h2 >R$ Preço</h2>
                    <hr />
                    <button type="button" class="btn btn-secondary">Comprar</button>
                </div>
                <div class="col-4">
                    <a href="{{ route('especifico')}}">
                    <img src="https://http2.mlstatic.com/D_NQ_NP_816694-MLB54867165128_042023-O.webp" alt="Product One" />
                    </a>
                    <br>
                    <br>
                    <h2 >Camiseta ""</h2>
                    <h2 >R$ Preço</h2>
                    <hr>
                    <button type="button" class="btn btn-secondary">Comprar</button>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection