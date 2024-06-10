@extends('layouts.app')

@section('title')
<title>Finalizar Compra</title>
@endsection

@section('body')
<div class="row">
    <div class="col"></div>
    <div class="col">
        <form action="{{ route('finalizar.compra') }}" method="post" class="mt-4 mb-4">
            @csrf

            <!-- Informações do cliente -->
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço:</label>
                <input type="text" id="endereco" name="endereco" class="form-control" required>
            </div>

            <!-- Outros campos de endereço (logradouro, número, complemento, bairro, cidade, estado, CEP) -->

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <!-- Informações de pagamento -->
            <div class="mb-3">
                <label for="metodo_pagamento" class="form-label">Método de Pagamento:</label>
                <select id="metodo_pagamento" name="metodo_pagamento" class="form-select" required>
                    <option value="cartao">Cartão de Crédito</option>
                    <option value="paypal">PayPal</option>
                    <option value="boleto">Boleto Bancário</option>
                </select>
            </div>

            <!-- Outros campos de pagamento (número do cartão, validade, CVV, nome do titular, CPF, etc.) -->

            <!-- Opções de envio -->
            <div class="mb-3">
                <label for="metodo_envio" class="form-label">Método de Envio:</label>
                <select id="metodo_envio" name="metodo_envio" class="form-select" required>
                    <option value="entrega_expressa">Entrega Expressa</option>
                    <option value="entrega_padrao">Entrega Padrão</option>
                    <!-- Outras opções de envio -->
                </select>
            </div>

            <div class="mb-3">
                <label for="observacoes" class="form-label">Observações:</label>
                <textarea id="observacoes" name="observacoes" class="form-control"></textarea>
            </div>

            <!-- Resumo do pedido -->
            <h3 class="mb-3">Resumo do Pedido</h3>
            <!-- Lista de produtos comprados -->
            <!-- Total a pagar -->

            <button type="submit" class="btn btn-secondary">Finalizar Compra</button>
        </form>
    </div>
    <div class="col"></div>
</div>

@endsection