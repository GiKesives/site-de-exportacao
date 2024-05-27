@extends('layouts.app')

@section('title')
<title>Carrinho</title>
@endsection

@section('body')
<div class="container-fluid">
    <div class="row text-center">
        <p>Bem vindo ao carrinho!</p>
        <div class="col"></div>
        <div class="col-9">
            <table class="table">
                <thead>
                    <tr>
                        <th>Imagem</th>
                        <th>Nome</th>
                        <th>Quantidade</th>
                        <th>Preço Unitário</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @forelse($carrinhos as $carrinho)
                    <tr>
                        <td><img src="{{ $carrinho->imagem }}" alt="{{ $carrinho->nome }}" style="width: 100px; height: auto;"></td>
                        <td>{{ $carrinho->nome }}</td>
                        <td>{{ $carrinho->quantidade }}</td>
                        <td>R$ {{ number_format($carrinho->preco, 2, ',', '.') }}</td>
                        <td>R$ {{ number_format($carrinho->quantidade * $carrinho->preco, 2, ',', '.') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td>NENHUM ITEM NO CARRINHO!</td>
                    </tr>
                    @endforelse --}}
                </tbody>
                <tfoot>
                    {{-- <tr>
                        <td colspan="4" class="text-end">Total a pagar:</td>
                        <td>R$ {{ number_format($totalAPagar, 2, ',', '.') }}</td>
                    </tr> --}}
                </tfoot>
            </table>
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection