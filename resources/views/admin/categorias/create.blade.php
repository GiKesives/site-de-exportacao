@extends('layouts.app')

@section('title')
<title>Cadastro de Categorias</title>
@endsection
<style>
/*INFO*/
.info {
border-top: 0 solid hsl(0, 0%, 7%);
border-top-width: 1px;
display: flex;
flex-wrap: wrap;
justify-content: space-between;
padding: 115px 58px;
}

.infoCard {
display: flex;
align-items: center; 
}

.infoCard svg {
width: 45px;
}

.infoCardText {
padding: 20px;
}

.infoCardText p:first-child {
font-family: "metropolissemi_bold", sans-serif;
font-size: 1.1rem;
}

.infoCardText p {
font-size: 0.9rem;
}
/*NAV*/

/* Adiciona a classe de animação */
.rotating-logo {
animation: rotateLogo 4s linear infinite; /* 4s para uma rotação completa, pode ajustar conforme necessário */
}

/* Define a animação de rotação */

/* Estilo para o contêiner da logo */
.logo {
display: block; /* Permite que o contêiner se ajuste ao tamanho da imagem */
/* Adicione outros estilos conforme necessário */
/*  padding-left: 33rem;*/
text-align: center;
}

/* Estilo para a imagem da logo */
.logo img {
max-width: 150px; /* Define a largura máxima da imagem */
max-height: 50px; /* Define a altura máxima da imagem */
}




/* Menu */


.menu {
text-align: center;
}
.menu ul {
list-style-type: none;
margin: 0;
padding: 0;
padding-left: 24rem;
overflow: hidden;
background-color: #000000; /* Cor de fundo do menu */
}

section.menu {
/* padding-right: 10px;*/
}
.menu ul li {
float: left;
}

.menu ul li a {
display: block;
color: white; /* Cor do texto */
text-align: center;
padding: 14px 16px;
text-decoration: none;

}

.menu ul li a:hover {
background-color: #a4a4a4; /* Cor de fundo ao passar o mouse */
}

.menu ul li a.active {
background-color: #ddd; /* Cor de fundo ao clicar */
color: #333; /* Cor do texto ao clicar */
}
/* login */
.login {
display: flex;
align-items: center;
padding: 6px 7px;
margin-right: 20px;
}

.login a {
color: hsl(0, 0%, 7%);
}

.login .icon {
font-size: 1.6rem;
padding-right: 15px;
}

.login .font:hover {
color: hsl(60, 1%, 46%);
}

/* Social Media */
.socialMedia {
display: flex;
align-items: center;
margin-right: 45px;
}

.socialMedia a {
color: hsl(60, 1%, 46%);
}

.socialMedia .iconSocial {
font-size: 1.1rem;
padding: 0 9px;
}

.login {
position: absolute;
top: 20px;
right: 62px;
}

.carrinho {
position: absolute;
top: 26px;
right: 150px;
}

/*FOOTER*/
footer {
background: hsl(0, 0%, 0%);
}

.footerRow {
display: flex;
align-items: center;
justify-content: space-between;
}
.white-text {
color: white;
}

.footerNav, 
.footerInfos, 
.footerNewsletter {
display: flex;
flex: 1;
flex-direction: column;
gap: 25px;
justify-content: left;
padding: 38px;
}

/* Nav */
.footerNav {
margin-left: 45px;
}

.footerTitle h5 {
font-family: "metropolissemi_bold", sans-serif;
font-size: 1rem;
}

.footerMenu li {
margin: 9px 0;
}

.footerMenu li:first-child {
margin-top: 0;
}

.footerMenu a {
color: hsl(0, 0%, 100%);
font-size: 0.87rem;
}

/* Safe and Payment method */
.footerImage {
display: flex;
}

.footerImage div:first-child {
justify-content: left;
margin-right: 25px;
}

.footerImage div svg {
width: 28px;
}

.footerImage p {
font-size: 0.87rem;
}

.infosPayment {
display: flex;
flex-direction: column;
gap: 25px;
}

/* Newsletter */
.footerNewsletter {
padding: 38px 38px 100px 38px;
margin-right: 45px;
}

.newsletterForm form {
display: flex;
flex-direction: column;
}

.newsletterForm label {
font-size: 0.87rem;
margin-bottom: 9px;
}

.newsletterForm input {
background: transparent;
border: 1px solid hsl(0, 0%, 100%);
height: 37px;
padding: 3px 3px 3px 21px;
}

.newsletterForm button {
background: hsl(0, 0%, 7%);
color: hsl(0, 0%, 100%);
font-family: "metropolissemi_bold", sans-serif;
font-size: 1.06rem;
margin-top: 9px;
height: 42px;
}

.newsletterForm button:hover {
background: rgb(130, 130, 130);
border: 1px solid rgb(145, 145, 145);
transition: border 0.4s ease 0s, background 0.4s ease 0s;
}
.container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        max-width: 400px;
        text-align: center;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 8px;
        font-size: 14px;
        margin-bottom: 10px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        text-align: left;
    }

    button[type="submit"] {
        padding: 8px 20px;
        font-size: 14px;
        background-color: #6c757d;
        color: #fff;
        border: none;
    }
    .mt-5{float: left;}
</style>
@section('body')
<div class="row">
    <h1 class="mt-5 text-center">Editar Categoria</h1>
    <div class="col"></div>
    <div class="col">
        <form action="{{ route('categorias.store')}}" method="POST">
            @csrf
            <div>
                <label class="form-label">Nome:</label>
                <input type="name" name="nome_categoria" class="form-control" placeholder="Seu nome">
            </div>
            <div>
                <label class="form-label">Descrição:</label>
                <input type="name" name="descricao_categoria" class="form-control">
                <br>
                <button type="submit" class="form-control btn btn-secondary">Cadastrar</button>
            </div>
        </form>
    </div>
    <div class="col"></div>
</div>
@endsection