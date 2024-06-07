@extends('layouts.app')

@section('title')
    <title>Carrinho</title>
@endsection

@section('body')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tbody>
                    <tr>
                        <td><strong>Imagem:</strong><br><img src="{{ $produto->imagem }}" /></td>
                        <td><strong>Nome:</strong><br>{{ $produto->nome }}</td>
                        <td><strong>Preço:</strong><br>R$ {{ $produto->preco }}</td>
                        <td><strong>Total a Pagar:</strong><br>R$ {{ $produto->preco }}</td>                        
                    </tr>
                    <tr>
                        <td colspan="5" class="text-end">
                            <a href="{{ route('compra')}}" class="btn btn-secondary">Finalizar compra</a>
                            {{-- <a href="cancelar.carrinho" class="btn btn-secondary">Cancelar</a> --}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection