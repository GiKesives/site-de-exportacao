@extends('layouts.app')

@section('title')
<title>Faq</title>
@endsection

@section('body')
<style>
  .bs-accordion-bg{
    background-color: black
  }
  /* Estilo para caixas do acordeão */
  .accordion-item {
    background-color: black; /* cor de fundo preta */
    color: white; /* cor do texto branco */
  }

  /* Estilo para a caixa quando clicada (ativa) */
  .accordion-button:not(.collapsed) {
    background-color: black; /* cor de fundo preta quando ativo */
  }

  /* Estilo para o texto dentro dos botões */
  .accordion-button {
    color: white; /* cor do texto branco */
    background-color: black
  }

  /* Estilo para o texto dentro das caixas de conteúdo */
  .accordion-body {
    color: white; /* cor do texto branco */
  }
</style>

<div class="container">
  <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="color: white;">
          Quais são as opções de pagamento disponíveis na sua loja?
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" style="color: white;">
        <div class="accordion-body" style="color: white;">Aceitamos pagamentos via cartão de crédito, PayPal, transferência bancária, boleto e pix.</div>
      </div>
    </div>
    <br>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="color: white;" >
          Qual é o prazo de entrega dos produtos?
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="color: white">O prazo de entrega varia de acordo com o destino e o método de envio escolhido. Geralmente, nossos produtos são entregues dentro de 5-7 dias úteis após a confirmação do pagamento.</div>
      </div>
    </div>
    <br>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" style="color: white;">
          Posso cancelar ou alterar meu pedido após a compra?
        </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="color: white">Sim, você pode cancelar ou alterar seu pedido dentro de 24 horas após a compra, desde que o pedido ainda não tenha sido processado para envio. Entre em contato conosco o mais rápido possível para solicitar qualquer alteração.</div>
      </div>
    </div>   
    <br>
     <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour" style="color: white;">
          Vocês oferecem garantia nos produtos?
        </button>
      </h2>
      <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="color: white">Sim, oferecemos garantia em todos os nossos produtos contra defeitos de fabricação. Consulte nossa política de garantia para obter mais detalhes.</div>
      </div>
    </div>   
    <br>
     <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive" style="color: white;">
          Como faço para rastrear meu pedido?
        </button>
      </h2>
      <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="color: white">Assim que seu pedido for despachado, você receberá um e-mail de confirmação com um número de rastreamento. Você pode usar esse número para rastrear o status do seu pedido em nosso site ou no site dos transportadores.</div>
      </div>
    </div>
    <br>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix" style="color: white;">
          Vocês enviam para fora do país?
        </button>
      </h2>
      <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="color: white">Sim, trabalhamos exportando nossos produtos.</div>
      </div>
    </div>
    <br>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven" style="color: white;">
          Vocês oferecem descontos para compras em grande quantidade?
        </button>
      </h2>
      <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="color: white">Não oferecemos desconto, mas você pode entrar em contato conosco para analisarmos a possibilidade de diminuição no valor do frete.</div>
      </div>
    </div>
    <br>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight" style="color: white;">
          Vocês trabalham com reembolso?
        </button>
      </h2>
      <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="color: white">Sim, para solicitar um reembolso, por favor entre em contato conosco através do nosso serviço de atendimento ao cliente dentro do prazo estabelecido em nossa política de devolução. Será necessário entrar em contato com nosso e-mail, fornecendo informações sobre o pedido e o motivo da insatisfação com o produto. Nossa equipe analisará sua solicitação e providenciará o reembolso de acordo com nossos termos e condições.</div>
      </div>
    </div>
  </div>
</div>

    </main>
@endsection


