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
                    <!-- Login -->

                </div>
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
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
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

    <footer>
        <div id="container">
            <div class="footerRow">
                <!-- Nav -->
                <nav class="footerNav">
                    <div class="footerTitle">
                        <h5>Loja</h5>
                    </div>
                    <div class="footerMenu">
                        <ul>
                            <li>
                                <a href="#">Sobre</a>
                            </li>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>
                                <a href="#">Contato</a>
                            </li>
                            <li>
                                <a href="#">Envio e Devoluções</a>
                            </li>
                            <li>
                                <a href="#">Política de Loja</a>
                            </li>
                            <li>
                                <a href="#">Métodos de pagamento</a>
                            </li>
                        </ul>
                    </div>  
                </nav>

                <!-- Safe and Payment method -->
                <section class="footerInfos">
                    <!-- Safe -->
                    <div class="footerTitle">
                        <h5>Segurança</h5>
                    </div>
                    <div class="footerImage">
                        <div>
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <g id="Layer_1">
                                <path d="M1,8.259V9c0,15.767,8.366,30.655,21.835,38.853L25,49.17l2.165-1.318C40.634,39.655,49,24.767,49,9V8.259L25,0.955
                                    L1,8.259z M26.126,46.145L25,46.83l-1.126-0.685C11.209,38.435,3.263,24.538,3.007,9.739L25,3.045l21.993,6.693
                                    C46.737,24.538,38.791,38.435,26.126,46.145z"/>
                                <polygon points="15.707,25.293 14.293,26.707 22,34.414 41.707,14.707 40.293,13.293 22,31.586"/>
                            </g>
                            </svg>
                        </div>
                        <div>
                            <p>
                                Ambiente 100% Seguro. Sua Informação é Protegida Pela Criptografia SSL 256-Bit.
                            </p>
                        </div>
                    </div>
                    <!-- Payment -->
                    <div class="infosPayment">
                        <div class="footerTitle">
                            <h5>Métodos de pagamentos aceitos</h5>
                        </div>
                        <div>
                            <img src="./assets/image/Métodos de pagamentos aceitos.webp" alt="Métodos de pagamentos aceitos">
                        </div>
                    </div>
                </section>

                <!-- Newsletter -->
                <section class="footerNewsletter">
                    <div class="footerTitle">
                        <h5>Junte-se à lista de e-mails e não perca as novidades</h5>
                    </div>
                    <div class="newsletterForm">
                        <form action="/form-data" method="post">
                            <label for="email">
                                Insira o seu e-mail aqui *
                            </label>
                            <input type="email" name="email" id="email">
                            <button type="submit">Assine Já</button>
                        </form>
                    <!-- </div> -->
                </section>
            </div>
        </div>
    </footer>
</body>
</html>