@extends('layouts.app')

@section('title')
<title>Produtos</title>
@endsection

@section('body')
     <main id="container">
        <!-- Seção de produtos -->
        <section class="product">
            @foreach($produtos as $produto)
                <div class="productCard">
                    <div class="productCardImage">
                        <a href="{{ route('produto.especifico', $produto->id) }}">
                            <img src="{{ asset($produto->imagem) }}" alt="{{ $produto->nome }}" />
                             {{-- <img src="{{ asset('assets/image/sza-frente-branca.png') }}" alt="{{ $produto->nome }}">  --}}
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
                                R$ {{ $produto->preco }}
                            </span>                     
                        </div>
                        <a href="{{ route('produto.especifico', $produto->id) }}">
                            <button type="button" class="btn btn-secondary">Ver detalhes</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </section>
    </main> 
@endsection 

