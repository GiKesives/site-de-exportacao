@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

@section('body')
<main id="container">
    <!-- video -->
        <section>
            <div id="video-banner">
                <video autoplay muted loop>
                    <source src="{{ asset('assets/videos/video.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </section>
        <!-- Product -->
        <section class="product">
            @foreach($produtos as $produto)
            <!-- First line -->
            <div class="productCard">
                <div class="productCardFlag">
                    <span>Mais vendido</span>
                </div>
                <div class="productCardImage">
                    <a href="{{ route('produto.especifico', $produto->id) }}">
                        <img src="{{ asset($produto->imagem) }}" alt="{{ $produto->nome }}" />
                        {{-- <img src="{{ asset('assets/image/bruno-frente-preta.png') }}" alt="Product One" /> --}}
                    </a>
                </div>
                <div class="productInfo">
                    {{-- <h2>Camiseta Bruno Mars</h2> --}}
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
                    {{-- <div class="item-price-container mb-2" data-store="product-item-price-204463675">
                        <span class="js-compare-price-display price-compare " style="display:none;">
                            R$0,00
                        </span>
                        <span class="js-price-display item-price">
                            R$160,00
                        </span>
                    </div>  --}}
                    <a href="{{ route('produto.especifico', $produto->id) }}">
                        <button type="button" class="btn btn-secondary">Ver detalhes</button>
                    </a>
                    {{-- <a href="{{ route('especifico') }}">
                        <button type="button" class="btn btn-secondary">Comprar</button>
                    </a> --}}
                </div>
            </div>
            @endforeach
        </section>

</main>
@endsection
