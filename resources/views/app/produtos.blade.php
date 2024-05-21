@extends('layouts.app')

@section('title')
<title>Produtos</title>
@endsection
 
@section('css')
<style>
    .img-fluid{
        height: 290px;
        width: auto;
    }
</style>
@endsection 

@section('body')

<div class="container-fluid">
    <h3 class="text-center">Produtinhos abaixo</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="item-produtos">
                <img src="https://acdn.mitiendanube.com/stores/001/620/789/products/camisa-chelsea-2011-2012-11-12-champins-league-final-campeoes-retro-drogba-11-6fac41fad5db0ade8c16954322404142-640-0.png" alt="camisa_chelsea" class="img-fluid">
                <h6>Nome: $Nome</h6>
                <h6>Preço: $Preço</h6>
            </div>
        </div>
        <div class="col-md-4">
            <div class="item-produtos">
                <img src="https://acdn.mitiendanube.com/stores/001/620/789/products/camisa-chelsea-2011-2012-11-12-champins-league-final-campeoes-retro-drogba-11-6fac41fad5db0ade8c16954322404142-640-0.png" alt="camisa_chelsea" class="img-fluid">
                <h6>Nome: $Nome</h6>
                <h6>Preço: $Preço</h6>
            </div>
        </div>
        <div class="col-md-4">
        <div class="item-produtos">
            <img src="https://acdn.mitiendanube.com/stores/001/620/789/products/camisa-chelsea-2011-2012-11-12-champins-league-final-campeoes-retro-drogba-11-6fac41fad5db0ade8c16954322404142-640-0.png" alt="camisa_chelsea" class="img-fluid">
            <h6>Nome: $Nome</h6>
            <h6>Preço: $Preço</h6>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="item-produtos">
                <img src="https://acdn.mitiendanube.com/stores/001/865/527/products/820410861-337c445a1f49975ed716800315597052-640-0.jpg" alt="camisa_manUtd" class="img-fluid">
                <h6>Nome: $Nome</h6>
                <h6>Preço: $Preço</h6>
            </div>
        </div>
        <div class="col-md-4">
            <div class="item-produtos">
                <img src="https://acdn.mitiendanube.com/stores/001/865/527/products/820410861-337c445a1f49975ed716800315597052-640-0.jpg" alt="camisa_manUtd" class="img-fluid">
                <h6>Nome: $Nome</h6>
                <h6>Preço: $Preço</h6>
            </div>
        </div>
        <div class="col-md-4">
            <div class="item-produtos">
                <img src="https://acdn.mitiendanube.com/stores/001/865/527/products/820410861-337c445a1f49975ed716800315597052-640-0.jpg" alt="camisa_manUtd" class="img-fluid">
                <h6>Nome: $Nome</h6>
                <h6>Preço: $Preço</h6>
            </div>
        </div>
    </div>
    <div class="row"></div>
    <div class="row"></div>
</div>


@endsection



