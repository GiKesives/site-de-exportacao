<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     @yield('title')
     
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/style/header.css" />
    <link rel="stylesheet" href="./assets/style/nav.css" />
    <link rel="stylesheet" href="./assets/style/product.css" />
    <link rel="stylesheet" href="./assets/style/info.css" />
    <link rel="stylesheet" href="./assets/style/about.css" />
    <link rel="stylesheet" href="./assets/style/footer.css">
    <link rel="stylesheet" href="./assets/style/video.css">
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

        .icons {
            margin-left: auto; /* Isso empurrará os ícones para a direita */
        }

        .icons ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .icons ul li {
            display: inline-block; /* Isso fará com que os ícones fiquem lado a lado */
            margin-left: 20px; /* Adiciona um espaço entre os ícones */
        }

        .icons ul li a {
            color: white;
            text-decoration: none;
            font-size: 30px;
        }
</style>

</head>
<body>

    <header>
        <!-- Nav -->
    <nav>
        <br>
        <div id="container">
<!-- Logo -->


<section class="logo">
    <a href="{{ route('home')}}">
        <img src="{{ asset('assets/image/logo.png') }}" alt="Nome da sua empresa" class="rotating-logo">
    </a>
</section>
<section class="login">
<a href="{{ route('login')}}">
    <svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="#ffffff"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path
    d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"
  ></path>
  <circle cx="12" cy="7" r="4"></circle>
</svg>
</a>
</section>

<section class="carrinho">   
 <a href="{{ route('carrinho')}}">
 <svg    xmlns="http://www.w3.org/2000/svg" 
  width="24"  
 height="24"  
 viewBox="0 0 24 24"  
 fill="none" 
 stroke="#ffffff"
 stroke-width="2"
 stroke-linecap="round" 
 stroke-linejoin="round" >  
 <circle cx="9" cy="21" r="1">
 </circle> 
 <circle cx="20" cy="21" r="1">
</circle>   
<path     d="M1 1h4l2.68 12.32a2 2 0 0 0 2 1.68h9.72a2 2 0 0 0 2-1.68L23 6H6"   >
</path> 
</svg>  
</a>
 </section>


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
                <li class="font"><a href="{{ route('cadastro')}}">Painel Adm</a></li>
            </ul>
        </section>
        {{-- <section class="icons">
            <ul>
                <li><a href="{{ route('perfil') }}"><i class="fa fa-user"></i></a></li>
                <li><a href="{{ route('carrinho') }}"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
        </section> --}}
                <!-- Search -->
            </div>
        </div>
    </header>
    @yield('body')
        <!-- Information -->
        <section class="info">
            <!-- Free shipping -->
            <div class="infoCard">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="1" y="3" width="15" height="13"/>
                    <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/>
                    <circle cx="5.5" cy="18.5" r="2.5"/>
                    <circle cx="18.5" cy="18.5" r="2.5"/>
                  </svg>
                  
                <div class="infoCardText">
                    <p>Frete Grátis</p>
                    <p>Confira Condições</p>
                </div>
            </div>
            <!-- Information -->
            <div class="infoCard">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2C8.14 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.14-7-7-7zM12 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                  </svg>
                  
                <div class="infoCardText">
                    <p>Enviamos</p>
                    <p>para todo Brasil</p>
                </div>
            </div>
            <!-- Pay -->
            <div class="infoCard">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                    <line x1="1" y1="10" x2="23" y2="10"/>
                  </svg>
                  
                <div class="infoCardText">
                    <p>Até 12x sem juros</p>
                    <p>10% Off no Boleto</p>
                </div>
            </div>
            <!-- Safe -->
            <div class="infoCard">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                    <g id="Layer_1">
                        <path d="M1,8.259V9c0,15.767,8.366,30.655,21.835,38.853L25,49.17l2.165-1.318C40.634,39.655,49,24.767,49,9V8.259L25,0.955
                            L1,8.259z M26.126,46.145L25,46.83l-1.126-0.685C11.209,38.435,3.263,24.538,3.007,9.739L25,3.045l21.993,6.693
                            C46.737,24.538,38.791,38.435,26.126,46.145z"/>
                        <polygon points="15.707,25.293 14.293,26.707 22,34.414 41.707,14.707 40.293,13.293 22,31.586"/>
                    </g>
                </svg>
            </div>
        </section>


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
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M5 12l5 5L19 7"/>
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