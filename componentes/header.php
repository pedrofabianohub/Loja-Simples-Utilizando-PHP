<?php

session_start();

if (!isset($_SESSION['carrinho'])){
    $quantidadeItensCarrinho = 0;
} else {
    $quantidadeItensCarrinho = count($_SESSION['carrinho']);
}


?>


<header class="header">
    <div class="container">
        <div class="logo">
            <a href="http://localhost:8000/">Minha Loja</a>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="http://localhost:8000/">Início</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="http://localhost:8000/carrinho.php" class="cart" id='carrinho'>Carrinho <span id="total">(<?=$quantidadeItensCarrinho?>)</span></a></li>
            </ul>
        </nav>
    </div>
</header>