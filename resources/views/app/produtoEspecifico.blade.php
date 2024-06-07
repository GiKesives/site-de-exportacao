
@extends('layouts.app')

@section('title')
<title>Especifico</title>
@endsection

@section('body')

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
                        <h3>Para camisetas personalizadas </h3>
                        <p>Em até 48 horas entraremos em contato para mais informações.</p>
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
                    <main id="container">
                        <!-- Seção de produtos -->
                        <section class="product">
                             {{-- @foreach($produtos as $produto) 
                                <div class="productCard">
                                    <div class="productCardImage">
                                        <a href="{{ route('produto.especifico', $produto->id) }}">
                                            <img src="{{ asset($produto->imagem) }}" alt="{{ $produto->nome }}" />
                                             {{-- <img src="{{ asset('assets/image/sza-frente-branca.png') }}" alt="{{ $produto->nome }}"> 
                                         </a>
                                    </div>
                                    <div class="productInfo">
                                        <h2>{{ $produto->nome }}</h2>
                                        <hr />
                                        <div class="item-price-container mb-2" data-store="product-item-price-{{ $produto->id }}">
                                            <span class="js-compare-price-display price-compare" style="display:none;">
                                                R$0,00
                                            </span>
                                            <span class="js-price-display item-price">
                                                R$ {{ $produto->$preco }}
                                            </span>                     
                                        </div>
                                        <a href="{{ route('produto.especifico', $produto->id) }}">
                                            <button type="button" class="btn btn-secondary">Ver detalhes</button>
                                        </a>
                                    </div>
                                </div>
                            @endforeach  --}}
                        </section>
                    </main> 
                </div>
                <div class="col-4">
                    
                </div>
                <div class="col-4">
                    <a href="{{ route('especifico')}}">
                    <img src="beyonce-frente-cinza.png" alt="Product One" />
                    </a>
                    <br>
                    <br>
                    <h2 >Camiseta ""</h2>
                    <h2 >R$ Preço</h2>
                    <hr>
                    <a href="{{ route('produto.especifico', $produto->id) }}">
                    <button type="button" class="btn btn-secondary">Comprar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</div> 
@endsection