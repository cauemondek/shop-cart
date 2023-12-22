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
        echo '<p class="priceDesc">Preço: R$ ' . ($value['quantidade'] * $value['preco']) . ',00</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<div class="cart-empty" id="cartEmpty">';
    echo '<i class="fa-solid fa-cart-plus fa-2xl"></i>';
    echo '<div class="desc-empty">';
    echo '<h2>Seu carrinho está vazio</h2>';
    echo '<p>Navegue pela loja e adicione algum produto.</p>';
    echo '</div>';
    echo '</div>';
}

?>