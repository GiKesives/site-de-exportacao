@extends('layouts.app')

@section('title')
<title>Home</title>
@endsection

@section('body')
    <main id="container">
        <!-- video --> 
        <section>
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
                    <a href="{{ route('especifico')}}">
                    <img src="{{ asset('assets/image/sza-frente-branca.png') }}" alt="Product One" />
                    </a>
                </div>
                <div class="productInfo">
                    <h2>Camiseta Sza</h2>
                    <hr />
                    <div class="item-price-container mb-2" data-store="product-item-price-204463675">
                        <span class="js-compare-price-display price-compare " style="display:none;">
                            R$0,00
                        </span>
                        <span class="js-price-display item-price">
                            R$160,00
                        </span>                     
                    </div>
                    <button type="button" class="btn btn-secondary">Comprar</button>
                </div>
            </div>

            <div class="productCard">
                <div class="productCardFlag hide">
                    <span></span>
                </div>
                <div class="productCardImage">
                    <a href="{{ route('especifico')}}">
                    <img src="{{ asset('assets/image/justin-frente-cinza.png') }}" alt="Product One" />
                    </a>
                </div>
                <div class="productInfo">
                    <h2>Camiseta Justin Biber</h2>
                    <hr />
                    <div class="item-price-container mb-2" data-store="product-item-price-204463675">
                        <span class="js-compare-price-display price-compare " style="display:none;">
                            R$0,00
                        </span>
                        <span class="js-price-display item-price">
                            R$160,00
                        </span>                       
                    </div>
                    <button type="button" class="btn btn-secondary">Comprar</button>
                </div>
            </div>

            <div class="productCard">
                <div class="productCardFlag hide">
                    <span></span>
                </div>
                <div class="productCardImage">
                    <a href="{{ route('especifico')}}">
                    <img src="{{ asset('assets/image/bruno-frente-marrom.png') }}" alt="Product One" />
                    </a>
                </div>
                <div class="productInfo">
                    <h2>camiseta Bruno Mars</h2>
                    <hr />
                    <div class="item-price-container mb-2" data-store="product-item-price-204463675">
                        <span class="js-compare-price-display price-compare " style="display:none;">
                            R$0,00
                        </span>
                        <span class="js-price-display item-price">
                            R$160,00
                        </span>                       
                    </div>
                    <button type="button" class="btn btn-secondary">Comprar</button>
                </div>
            </div>

            <div class="productCard">
                <div class="productCardFlag">
                    <span>Mais vendido</span>
                </div>
                <div class="productCardImage">
                    <a href="{{ route('especifico')}}">
                    <img src="{{ asset('assets/image/travis-frente-preta.png') }}" alt="Product One" />
                    </a>
                </div>
                <div class="productInfo">
                    <h2>Camiseta Travis Scott </h2>
                    <hr />
                    <div class="item-price-container mb-2" data-store="product-item-price-204463675">
                        <span class="js-compare-price-display price-compare " style="display:none;">
                            R$0,00
                        </span>
                        <span class="js-price-display item-price">
                            R$160,00
                        </span>                       
                    </div>
                    <button type="button" class="btn btn-secondary">Comprar</button>
                </div>
            </div>

            <!-- Second line -->
            <div class="productCard">
                <div class="productCardFlag hide">
                    <span></span>
                </div>
                <div class="productCardImage">
                    <a href="{{ route('especifico')}}">
                    <img src="{{ asset('assets/image/baco-frente-preta.png') }}" alt="Product One" />
                    </a>
                </div>
                <div class="productInfo">
                    <h2>Camiseta Baco Exu Do Blues</h2>
                    <hr />
                    <div class="item-price-container mb-2" data-store="product-item-price-204463675">
                        <span class="js-compare-price-display price-compare " style="display:none;">
                            R$0,00
                        </span>
                        <span class="js-price-display item-price">
                            R$160,00
                        </span>                      
                    </div>
                    <button type="button" class="btn btn-secondary">Comprar</button>
                </div>
            </div>
            <div class="productCard">
                <div class="productCardFlag hide">
                    <span></span>
                </div>
                <div class="productCardImage">
                    <a href="{{ route('especifico')}}">
                    <img src="{{ asset('assets/image/beyonce-frente-cinza.png') }}" alt="Product One" />
                    </a>
                </div>
                <div class="productInfo">
                    <h2>Camiseta Beyoncé</h2>
                    <hr />
                    <div class="item-price-container mb-2" data-store="product-item-price-204463675">
                        <span class="js-compare-price-display price-compare " style="display:none;">
                            R$0,00
                        </span>
                        <span class="js-price-display item-price">
                            R$160,00
                        </span>
                    

                    </div>
                    <button type="button" class="btn btn-secondary">Comprar</button>
                </div>
                
            </div>

          
            <div class="productCard">
                <div class="productCardFlag hide">
                    <span></span>
                </div>
                <div class="productCardImage">
                    <a href="{{ route('especifico')}}">
                    <img src="{{ asset('assets/image/matue-frente-branca.png') }}" alt="Product One" />
                    </a>
                </div>
                <div class="productInfo">
                    <h2>Camiseta Matuê</h2>
                    <hr />
                    <div class="item-price-container mb-2" data-store="product-item-price-204463675">
                        <span class="js-compare-price-display price-compare " style="display:none;">
                            R$0,00
                        </span>
                        <span class="js-price-display item-price">
                            R$160,00
                        </span>                      
                    </div>
                    <button type="button" class="btn btn-secondary">Comprar</button>
                </div>
            </div>

            <div class="productCard">
                <div class="productCardFlag hide">
                    <span></span>
                </div>
                <div class="productCardImage">
                    <a href="{{ route('especifico')}}">
                    <img src="{{ asset('assets/image/sza-frente-branca.png') }}" alt="Product One" />
                    </a>
                </div>
                <div class="productInfo">
                    <h2>Camiseta Sza</h2>
                    <hr />
                    <div class="item-price-container mb-2" data-store="product-item-price-204463675">
                        <span class="js-compare-price-display price-compare " style="display:none;">
                            R$0,00
                        </span>
                        <span class="js-price-display item-price">
                            R$160,00
                        </span>
                        

                    </div>
                    <button type="button" class="btn btn-secondary">Comprar</button>
                </div>
            </div>

            <!-- Third line -->
            <div class="productCard">
                <div class="productCardFlag hide">
                    <span></span>
                </div>
                <div class="productCardImage">
                    <a href="{{ route('especifico')}}">
                    <img src="{{ asset('assets/image/matue-frente-preta.png') }}" alt="Product One" />
                    </a>
                </div>
                <div class="productInfo">
                    <h2>Camiseta Matuê</h2>
                    <hr />
                    <div class="item-price-container mb-2" data-store="product-item-price-204463675">
                        <span class="js-compare-price-display price-compare " style="display:none;">
                            R$0,00
                        </span>
                        <span class="js-price-display item-price">
                            R$160,00
                        </span>                     
                    </div>
                    <button type="button" class="btn btn-secondary">Comprar</button>
                </div>
            </div>

            <div class="productCard">
                <div class="productCardFlag">
                    <span>Mais vendido</span>
                </div>
                <div class="productCardImage">
                    <a href="{{ route('especifico')}}">
                    <img src="{{ asset('assets/image/personalize-cinza.png') }}" alt="Product One" />
                    </a>
                </div>
                <div class="productInfo">
                    <h2>Camiseta Personalize</h2>
                    <hr />
                    <div class="item-price-container mb-2" data-store="product-item-price-204463675">
                        <span class="js-compare-price-display price-compare " style="display:none;">
                            R$0,00
                        </span>
                        <span class="js-price-display item-price">
                            R$160,00
                        </span>                     
                    </div>
                    <button type="button" class="btn btn-secondary">Comprar</button>
                </div>
            </div>

            <div class="productCard">
                <div class="productCardFlag">
                    <span>Mais vendido</span>
                </div>
                <div class="productCardImage">
                    <a href="{{ route('especifico')}}">
                    <img src="{{ asset('assets/image/personalize-preta.png') }}" alt="Product One" />
                    </a>
                </div>
                <div class="productInfo">
                    <h2>Camiseta Personalize</h2>
                    <hr />
                    <div class="item-price-container mb-2" data-store="product-item-price-204463675">
                        <span class="js-compare-price-display price-compare " style="display:none;">
                            R$0,00
                        </span>
                        <span class="js-price-display item-price">
                            R$160,00
                        </span>                     
                    </div>
                    <button type="button" class="btn btn-secondary">Comprar</button>
                </div>
            </div>

            <div class="productCard">
                <div class="productCardFlag hide">
                    <span></span>
                </div>
                <div class="productCardImage">
                    <a href="{{ route('especifico')}}">
                    <img src="{{ asset('assets/image/justin-frente-preta.png') }}" alt="Product One" />
                    </a>
                </div>
                <div class="productInfo">
                    <h2>Camiseta Justin</h2>
                    <hr />
                    <div class="item-price-container mb-2" data-store="product-item-price-204463675">
                        <span class="js-compare-price-display price-compare " style="display:none;">
                            R$0,00
                        </span>
                        <span class="js-price-display item-price">
                            R$160,00
                        </span>                      
                    </div>
                    <button type="button" class="btn btn-secondary">Comprar</button>
                </div>
            </div>
        </section>
        
@endsection

