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
        <!-- First line -->
        <div class="productCard">
            <div class="productCardFlag">
                <span>Mais vendido</span>
            </div>
            <div class="productCardImage">
                <img src="https://http2.mlstatic.com/D_NQ_NP_816694-MLB54867165128_042023-O.webp" alt="Product One" />
            </div>
            <div class="productInfo">
                <h2>Camiseta ""</h2>
                <hr />
                <button type="button" class="btn btn-secondary">R$ 150,00</button>
            </div>
        </div>

        <div class="productCard">
            <div class="productCardFlag hide">
                <span></span>
            </div>
            <div class="productCardImage">
                <img src="https://http2.mlstatic.com/D_NQ_NP_816694-MLB54867165128_042023-O.webp" alt="Product One" />

            </div>
            <div class="productInfo">
                <h2>camiseta ""</h2>
                <hr />
                <button type="button" class="btn btn-secondary">R$ preço</button>
            </div>
        </div>

        <div class="productCard">
            <div class="productCardFlag hide">
                <span></span>
            </div>
            <div class="productCardImage">
                <img src="https://http2.mlstatic.com/D_NQ_NP_816694-MLB54867165128_042023-O.webp" alt="Product One" />
            </div>
            <div class="productInfo">
                <h2>camiseta ""</h2>
                <hr />
                <button type="button" class="btn btn-secondary">R$ preço</button>
            </div>
        </div>

        <div class="productCard">
            <div class="productCardFlag">
                <span>Mais vendido</span>
            </div>
            <div class="productCardImage">
                <img src="https://http2.mlstatic.com/D_NQ_NP_816694-MLB54867165128_042023-O.webp" alt="Product One" />
            </div>
            <div class="productInfo">
                <h2>camiseta ""</h2>
                <hr />
                <button type="button" class="btn btn-secondary">R$ preço</button>
            </div>
        </div>

        <!-- Second line -->
        <div class="productCard">
            <div class="productCardFlag hide">
                <span></span>
            </div>
            <div class="productCardImage">
                <img src="https://http2.mlstatic.com/D_NQ_NP_816694-MLB54867165128_042023-O.webp" alt="Product One" />
            </div>
            <div class="productInfo">
                <h2>camiseta ""</h2>
                <hr />
                <button type="button" class="btn btn-secondary">R$ preço</button>
            </div>
        </div>

        <div class="productCard">
            <div class="productCardFlag">
                <span>Promoção</span>
            </div>
            <div class="productCardImage">
                <img src="https://http2.mlstatic.com/D_NQ_NP_816694-MLB54867165128_042023-O.webp" alt="Product One" />
            </div>
            <div class="productInfo">
                <h2>camiseta ""</h2>
                <hr />
                <div class="productPrice">
                    <button type="button" class="btn btn-secondary">R$ preço</button>
                </div>
            </div>
        </div>

        <div class="productCard">
            <div class="productCardFlag hide">
                <span></span>
            </div>
            <div class="productCardImage">
                <img src="https://http2.mlstatic.com/D_NQ_NP_816694-MLB54867165128_042023-O.webp" alt="Product One" />
            </div>
            <div class="productInfo">
                <h2>camiseta ""</h2>
                <hr />
                <button type="button" class="btn btn-secondary">R$ preço</button>
            </div>
        </div>

        <div class="productCard">
            <div class="productCardFlag hide">
                <span></span>
            </div>
            <div class="productCardImage">
                <img src="https://http2.mlstatic.com/D_NQ_NP_816694-MLB54867165128_042023-O.webp" alt="Product One" />
            </div>
            <div class="productInfo">
                <h2>camiseta ""</h2>
                <hr />
                <button type="button" class="btn btn-secondary">R$ preço</button>
            </div>
        </div>

        <!-- Third line -->
        <div class="productCard">
            <div class="productCardFlag hide">
                <span></span>
            </div>
            <div class="productCardImage">
                <img src="https://http2.mlstatic.com/D_NQ_NP_816694-MLB54867165128_042023-O.webp" alt="Product One" />
            </div>
            <div class="productInfo">
                <h2>camiseta ""</h2>
                <hr />
                <button type="button" class="btn btn-secondary">R$ preço</button>
            </div>
        </div>

        <div class="productCard">
            <div class="productCardFlag">
                <span>Mais vendido</span>
            </div>
            <div class="productCardImage">
                <img src="https://http2.mlstatic.com/D_NQ_NP_816694-MLB54867165128_042023-O.webp" alt="Product One" />
            </div>
            <div class="productInfo">
                <h2>camiseta ""</h2>
                <hr />
                <button type="button" class="btn btn-secondary">R$ preço</button>
            </div>
        </div>

        <div class="productCard">
            <div class="productCardFlag">
                <span>Mais vendido</span>
            </div>
            <div class="productCardImage">
                <img src="https://http2.mlstatic.com/D_NQ_NP_816694-MLB54867165128_042023-O.webp" alt="Product One" />
            </div>
            <div class="productInfo">
                <h2>camiseta ""</h2>
                <hr />
                <button type="button" class="btn btn-secondary">R$ preço</button>
            </div>
        </div>

        <div class="productCard">
            <div class="productCardFlag hide">
                <span></span>
            </div>
            <div class="productCardImage">
                <img src="https://http2.mlstatic.com/D_NQ_NP_816694-MLB54867165128_042023-O.webp" alt="Product One" />
            </div>
            <div class="productInfo">
                <h2>camiseta ""</h2>
                <hr />
                <button type="button" class="btn btn-secondary">R$ preço</button>
            </div>
        </div>
    </section>

@endsection

