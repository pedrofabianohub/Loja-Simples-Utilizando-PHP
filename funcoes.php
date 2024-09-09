<?php

function exibirProdutos(array $produtos)
{

    foreach ($produtos as $produto => $detalhes) {
        $nome = $detalhes["nome"];
        $foto = $detalhes["foto"];
        $preco = number_format($detalhes["preco"], 2, ',','.');
        $quantidade = $detalhes["quantidade"];

        echo "
        <div class='product-card'>
            <img src='$foto' alt='$nome'>
            <div class='product-name'>$nome</div>
            <div class='product-price'>R$$preco</div>
            <div class='product-quantity'>Disponível: $quantidade unidades</div>
            <form method='POST' action='adicionarItemAoCarrinho.php'>
                <input type='hidden' name='id' value='$produto'>
                <input type='hidden' name='foto' value='$foto'>
                <input type='hidden' name='nome' value='$nome'>
                <input type='hidden' name='preco' value='$preco'>
                <input type='hidden' name='quantidade' value='1' min='1'>
                <button type='submit' class='btn btn-primary' name='adicionar'>Adicionar ao Carrinho</button>
            </form>
        </div>";
    }
}

function exibirCarrinho(array $carrinho)
{

    foreach ($carrinho as $produto => $detalhes) {

        $nome = $detalhes["nome"];
        $foto = $detalhes["foto"];
        $preco = $detalhes["preco"];
        $quantidade = $detalhes["quantidade"];

        echo "
    <div class='product-card col-12'>
        <img src='$foto' alt='$nome'>
        <div class='product-info'>
        <div class='product-name'>$nome</div>
        <div class='product-price'>R$ $preco</div>
        <div class='product-quantity'>Quantidade adicionada: <strong>$quantidade</strong> unidades</div>
        </div>
        <form method='POST' action='removerItemDoCarrinho.php'>
            <input type='hidden' name='nome' value='$nome'>
            <button type='submit' class='btn btn-danger' name='remover'>Remover do Carrinho</button>
        </form>
    </div>
    ";
    }
}

function calcularCarrinho($array)
{

    if (!empty($_SESSION['carrinho'])) {

    echo "<h4 class='mt-2'>Subtotal</h4>";

    echo "<ul class='list-group'>";

    $subtotal = 0;

    foreach ($array as $produto => $detalhes) {

        $nome = $detalhes["nome"];
        $foto = $detalhes["foto"];
        $preco = $detalhes['preco'];
        $quantidade = $detalhes["quantidade"];

        $subtotal = $subtotal += $preco;

        echo "
        
        <div class='col'>
                
                    <li class='list-group-item d-flex justify-content-between'>
                        $nome
                        <span>R$ $preco</span>
                    </li>
            
        ";

    }

    echo "
    
    <li class='list-group-item d-flex justify-content-between align-items-center font-weight-bold mt-2 bg-primary text-white'>
        Total:
        <span>R$ $subtotal </span>
    </li>
    </ul>
    <!-- Botão de Checkout -->
    <button class='btn btn-primary btn-block mt-2 col-12'>Finalizar Compra</button>
    </div>
    
    
    ";
    } else {
        echo '';
    }
}
