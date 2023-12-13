<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de compras</title>
</head>

<body>
    <header>
        <h1>carrinhoPHP</h1>
    </header>
    <div class="productsContainer">

        <?php

        $items = array(['imagem' => './imgs/item1.jpg', 'nome' => 'item1', 'preco' => '1500'], ['imagem' => './imgs/item2.jpg', 'nome' => 'item2', 'preco' => '4000'], ['imagem' => './imgs/item3.jpg', 'nome' => 'item3', 'preco' => '900']);

        foreach ($items as $key => $value) {

            ?>
            <div class="productCard">
                <img src="<?php echo $value['imagem'] ?>" alt="">
                <h3>
                    <?php echo $value['nome'] ?>
                </h3>
                <a href="?adicionar=<?php echo $key ?>">
                    <button>Adicionar ao carrinho</button>
                </a>
            </div>

            <?php
        }
        ?>
    </div> <!--products container-->

    <h1>Items do carrinho:</h1>

    <?php 
    include('cart.php');
    ?>



</body>

</html>