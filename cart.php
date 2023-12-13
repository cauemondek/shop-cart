<?php
if (isset($_GET['adicionar'])) {
        //adicionar ao carrinho
    $idProduto = (int) $_GET['adicionar'];
        if (isset($items[$idProduto])) {
            if (isset($_SESSION['carrinho'][$idProduto])) {
                $_SESSION['carrinho'][$idProduto]['quantidade']++;
            } else {
                $_SESSION['carrinho'][$idProduto] = array('quantidade' => 1, 'nome' => $items[$idProduto]['nome'], 'preco' => $items[$idProduto]['preco']);
            }
            echo '<script>alert("Item adicionado");</script>';
        } else {
            die('Você não pode adicionar um produto inexistente');
        }
 }

foreach ($_SESSION['carrinho'] as $key => $value) {
    //Nome do produto
    //Quantidade
    //preço
    echo '<div class="cart-item">';
    echo '<p>Nome: '.$value['nome'].' | Quantidade: '.$value['quantidade'].' | Preço: R$ '.($value['quantidade']*$value['preco']).',00</p>';
    echo '</div>';
}
?>