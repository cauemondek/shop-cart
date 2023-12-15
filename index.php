<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de compras</title>

    <link rel="stylesheet" href="./style.css">
    
    <script src="https://kit.fontawesome.com/dc49a974a4.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <p>carrinho</p><h1>PHP</h1>
    </header>
    <main>
    <div class="productsContainer">

        <?php

        $items = array(['imagem' => './imgs/item1.png', 'nome' => 'Processador AMD Ryzen 9 5950X', 'preco' => '1500', 'desc' => 'O melhor processador para jogadores encontra o melhor processador para criadores, com 16 núcleos e 32 linhas de processamento.'], 
        ['imagem' => './imgs/item2.png', 'nome' => 'Placa de Vídeo Galax NVIDIA Geforce RTX 4080 16GB', 'preco' => '4000', 'desc' => 'Alimentado pela nova arquitetura NVIDIA Ada Lovelace ultra eficiente, o 3rd geração de RTX, GeForce RTX 40 Series placas gráficas estão além rápido, dando gamers e criadores um salto quântico no desempenho, gráficos al-powered, e assim muitos mais recursos de plataforma líderes. Este enorme avanço na GPU a tecnologia é a porta de entrada para as experiências de jogo mais imersivas, incríveis.'], 
        ['imagem' => './imgs/item3.png', 'nome' => 'Placa Mãe Asrock B450m Steel Legend RGB', 'preco' => '900', 'desc' => 'Placa-mãe ASRock B450M Steel Legend AMD DDR4 Resistente como aço, verdadeira lenda a Steel Legend representa o estado filosófico da sólida durabilidade e irresistível estética. Construída ao redor das especificações e recursos mais exigentes, a série Steel Legend visa os usuários do dia a dia e entusiastas mainstream!Oferecendo uma forte gama de materiais/componentes para assegurar um desempenho estável e confiável.']);

        foreach ($items as $key => $value) {

            ?>
            <div class="productCard">
                <img src="<?php echo $value['imagem'] ?>" alt="">
                <div class="details">
                    <h3>
                        <?php echo $value['nome'] ?>
                    </h3>
                    <p>
                    <?php echo $value['desc'] ?>
                    </p>
                    <h4>
                    R$ <?php echo $value['preco'] ?>,00
                    </h4>
                </div>

                <a href="?adicionar=<?php echo $key ?>" class="addInCart">
                    <button>
                        <i class="fa-solid fa-cart-shopping"></i>
                        Adicionar ao carrinho
                    </button>
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
    </main>

</body>

</html>