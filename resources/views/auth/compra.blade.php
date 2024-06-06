@extends('layouts.app')

@section('title')
<title>Compra</title>

@endsection
@section('body')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: black; color: white;">
                <div class="card-header">{{ __('Formulário de Compra') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('purchase') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="product_name" class="col-md-4 col-form-label text-md-end">Nome do Produto</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control" name="product_name" required autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="quantity" class="col-md-4 col-form-label text-md-end">Quantidade</label>

                            <div class="col-md-6">
                                <input id="quantity" type="number" class="form-control" name="quantity" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">Preço Unitário</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control" name="price" required>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Comprar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
