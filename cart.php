<?php
if (isset($_GET['adicionar'])) {
    //adicionar ao carrinho
    $idProduto = (int) $_GET['adicionar'];
    if (isset($items[$idProduto])) {
        if (isset($_SESSION['carrinho'][$idProduto])) {
            $_SESSION['carrinho'][$idProduto]['quantidade']++;
        } else {
            $_SESSION['carrinho'][$idProduto] = array('quantidade' => 1, 'nome' => $items[$idProduto]['nome'], 'preco' => $items[$idProduto]['preco'], 'imagem' => $items[$idProduto]['imagem']);
        }
    } else {
        die('Você não pode adicionar um produto inexistente');
    }
}

if (isset($_SESSION['carrinho'])) {
    foreach ($_SESSION['carrinho'] as $key => $value) {
        echo '<div class="cart-item">';
        echo '<img src="'.$value['imagem'].'">';
        echo '<div class="cart-desc-item">';
        echo '<p>Nome: ' . $value['nome'] . '</p>';
        echo '<p>Quantidade: ' . $value['quantidade'] . '</p>';
        echo '<p>Preço: R$ ' . ($value['quantidade'] * $value['preco']) . ',00</p>';
        echo '</div>';
        echo '</div>';
        echo '<hr>';
    }
}
?>