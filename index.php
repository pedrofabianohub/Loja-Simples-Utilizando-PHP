<?php 

session_start();

include './bancoDeDados/dados.php';
include './funcoes.php';


/*
if (!empty($_POST['login']) && !empty($_POST['password'])) {

    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    $mensagem = null;

    if ($login === 'Admin' && $password === 'Admin') {
        $mensagem = "Voce logou com sucesso!!";
    } else {
        $mensagem = "Usuario ou senha incorretos!";
    }
}else {
    $mensagem = "Preencha todos os campos corretamente";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo $mensagem;
}
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtvkhdb4yEh54uzO6bCzALyZtRmlqlfKOmqA&s" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php include './componentes/header.php'; ?>

    <div class="container">
        <?= exibirProdutos($produtos) ?>
    </div>
    <div id="notification" class="notification">Produto adicionado com sucesso</div>

<script src="script.js" defer></script>
</body>
</html>