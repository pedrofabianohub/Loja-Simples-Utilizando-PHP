<?php 

session_start();

$mensagem = null;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if (isset($_POST['adicionar'])) {
    $produtoId = $_POST['id'];
    $foto = $_POST['foto'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $produto = [
        'id' => $produtoId,
        'foto' => $foto,
        'nome' => $nome,
        'preco' => $preco,
        'quantidade' => $quantidade
    ];

    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    $_SESSION['carrinho'][] = $produto;
    sleep(0.3);
    header('Location: index.php');
    $mensagem = "Item adicionado com sucesso!";

}

}




?>