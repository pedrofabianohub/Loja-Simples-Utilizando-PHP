<?php

session_start();

if (isset($_POST['remover'])) {

    if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
        
        $nome = $_POST['nome'];

        foreach ($_SESSION['carrinho'] as $indice => $produto) {
            if ($produto['nome'] === $nome) { 
                unset($_SESSION['carrinho'][$indice]); 
                $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
                sleep(.3);
                header('Location: carrinho.php');
            }
        }

        echo "Produto $nome não encontrado no carrinho.";
    }
}


?>