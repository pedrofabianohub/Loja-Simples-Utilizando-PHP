<?php

session_start();
include './funcoes.php';

$header = include './componentes/header.php';

$carrinho = $_SESSION['carrinho'];

if (!isset($_SESSION['carrinho']) || empty($_SESSION['carrinho'])) {
    $colEsquerda = 'col-12';
    $colDireita = '';
} else {
    $colEsquerda = 'col-9';
    $colDireita = 'col-3';
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link href="./css/carrinho.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
        <div class="row col-12">
            <div class=<?= $colEsquerda ?>>
            <?php
                if (!isset($_SESSION['carrinho']) || empty($_SESSION['carrinho'])) {
                    echo "<h1 class='text-center mt-5 col-10 offset-1'>Seu carrinho está vazio!</h1>
                    <img class='img-fluid col-4 offset-4' src='https://cdn3d.iconscout.com/3d/premium/thumb/carrinho-vazio-10285506-8333715.png?f=webp' />
                    <a href='index.php' class='btn btn-primary col-6 offset-3 mb-2'><strong>Voltar as compras!</strong></a>";
                } else{
                    exibirCarrinho($carrinho);
                }
                ?>
            </div>
            <div class=<?=$colDireita?>>
                <?= calcularCarrinho($carrinho) ?>
            </div>
        </div>
        <div id="notificationRemove" class="notification">Produto removido com sucesso</div>

<script src="script.js"></script>
</body>
</html>