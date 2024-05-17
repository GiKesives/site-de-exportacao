@extends('layouts.app')

@section('title')
    <title>Painel Admin</title>
@endsection

@section('css')

@endsection

@section('body')
<nav class="menu">
    {{-- <label class="logo">RespondeAi</label> --}}
    <ul>
          <li class="em"><a href="pagadm.php">Inicio</a></li>
          <li class="em"><a href="">Cadastros</a>
            <div class="drop-down">
              <ul>
              <li><a href="cadTurmas.php">Produtos</a></li>
              </ul>
            </div>
          </li>
    
          <li class="em"><a href="">Editar</a>
          <div class="drop-down">
              <ul>
              <li><a href="editarTurmas.php">Pedidos</a></li>
              <li><a href="editarAluno.php">Produtos</a></li>
              </ul>
            </div>
          </li>
          <li class="em"><a href="sair.php">SAIR</a></li>
    </ul>
@endsection

@section('js')
<script>
    console.log("Estou na página de admin.");
</script>
@endsection

