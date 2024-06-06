@extends('layouts.app')

@section('title')
<title>Finalizar Compra</title>
@endsection

@section('body')
<form action="{{ route('finalizar.compra') }}" method="post">
    @csrf

    <!-- Informações do cliente -->
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco" required>

    <!-- Outros campos de endereço (logradouro, número, complemento, bairro, cidade, estado, CEP) -->

    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="telefone" required>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>

    <!-- Informações de pagamento -->
    <label for="metodo_pagamento">Método de Pagamento:</label>
    <select id="metodo_pagamento" name="metodo_pagamento" required>
        <option value="cartao">Cartão de Crédito</option>
        <option value="paypal">PayPal</option>
        <option value="boleto">Boleto Bancário</option>
    </select>

    <!-- Outros campos de pagamento (número do cartão, validade, CVV, nome do titular, CPF, etc.) -->

    <!-- Opções de envio -->
    <label for="metodo_envio">Método de Envio:</label>
    <select id="metodo_envio" name="metodo_envio" required>
        <option value="entrega_expressa">Entrega Expressa</option>
        <option value="entrega_padrao">Entrega Padrão</option>
        <!-- Outras opções de envio -->
    </select>

    <label for="observacoes">Observações:</label>
    <textarea id="observacoes" name="observacoes"></textarea>

    <!-- Resumo do pedido -->
    <h3>Resumo do Pedido</h3>
    <!-- Lista de produtos comprados -->
    <!-- Total a pagar -->

    <button type="submit">Finalizar Compra</button>
</form>
@endsection