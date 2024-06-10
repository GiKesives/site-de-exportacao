@extends('layouts.app')

@section('title')
<title>Finalizar Compra</title>
@endsection

@section('body')
{{-- <div class="row">
    <div class="col"></div>
    <div class="col">
        <form action="{{ route('finalizar.compra') }}" method="post" class="mt-4 mb-4">
            @csrf
        
            <div class="mb-3">
            <!-- Informações do cliente -->
            <label for="nome" class="form-control">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            </div>
        
            <div class="mb-3">
            <label for="endereco" class="form-control">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>
            </div>
        
            <!-- Outros campos de endereço (logradouro, número, complemento, bairro, cidade, estado, CEP) -->
        
            <label for="telefone" class="form-control">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" required>
        
            <label for="email" class="form-controll">E-mail:</label>
            <input type="email" id="email" name="email" required>
        
            <!-- Informações de pagamento -->
            <label for="metodo_pagamento" class="form-control">Método de Pagamento:</label>
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
    </div>
    <div class="col"></div>
</div> --}}

<div class="row">
    <div class="col"></div>
    <div class="col">
        <form action="{{ route('finalizar.compra') }}" method="post" class="mt-4 mb-4">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nome Completo:</label>
            <input type="name" name="nome" class="form-control" placeholder="Seu nome">
        </div>
        <div class="mb-3">
            <label class="form-label">Telefone:</label>
            <input type="tel" name="telefone" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">E-mail:</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Metódo de Pagamento:</label>
                <select name="subject" class="form-control">
                    <option value="">Selecione uma opção</option>
                    <option value="cartao">Cartão de Crédito</option>
                    <option value="paypal">PayPal</option>
                    <option value="boleto">Boleto Bancário</option>
                </select>
        </div>
        <button type="submit" class="form-control btn btn-secondary">Finalizar Compra</button>
    </form>
    </div>
    <div class="col"></div>
</div>
@endsection