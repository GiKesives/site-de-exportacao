<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
     
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/style/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/style/nav.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/style/product.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/style/info.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/style/about.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/style/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/video.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Loja de camisetas personalizadas</title>

    <style>
        body {
          background-color: black; /* Definindo o fundo do site como preto */
          color: white; /* Definindo a cor do texto como branco */
      }
</style>
</head>
<body>

    <header>
        <!-- Nav -->
    <nav>
        <div id="container">
            <div class="headerRow">

                                <!-- Logo -->
                                <section class="logo">
    <a href="home.blade.php">
        <img src="{{ asset('assets/image/logo.png') }}" alt="Nome da sua empresa" class="rotating-logo">
    </a>
</section>
            </div>
        </div>
    </nav>
        <div id="container">
            <div class="headerRow">
              
               <!-- Menu -->
               <section class="menu">
                <ul>
                    <li class="font"><a href="{{ route('home')}}">Home</a></li>
                    <li class="font"><a href="{{ route('produto')}}">Produtos</a></li>
                    <li class="font"><a href="{{ route('sobre-nos')}}">Sobre-nos</a></li>
                    <li class="font"><a href="{{ route('faq')}}">FAQ</a></li>
                    <li class="font"><a href="{{ route('painel-adm')}}">Painel Adm</a></li>
                </ul>
            </section>
                <!-- Search -->

            </div>
        
        </div>
    </header>


<div class="container">
    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Usuario</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your user with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
    </main>
