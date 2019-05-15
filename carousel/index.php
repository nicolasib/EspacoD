<?php
    include_once "php/conexao.php";
    include 'php/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carousel</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Main.css -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <main>
        <section class="conteudo">
            <div class="dados">
                <div class="image-content">
                    <button class="prev-cima"><</button>
                    <div class="imageholder">
                        <div class="single-item item-cima">
                            <?php imprimirImgCima() ?>
                        </div>

                    </div>
                    <button class="next-cima">></button>
                </div>
                <div class="contentholder-cima">

                </div>
            </div>
        </section>
        <section class="conteudo">
            <div class="dados">
                <div class="image-content">
                    <button class="prev-baixo"><</button>
                    <div class="imageholder">
                        <div class="single-item item-baixo">
                            <?php imprimirImgBaixo() ?>
                        </div>
                    </div>
                    <button class="next-baixo">></button>
                </div>
                <div class="contentholder-baixo">

                </div>
            </div>
        </section>
        <div class="filtros">
            <button class="btn-filtro unfilter">Mostrar tudo</button>
            <button class="btn-filtro filtro-calca">Calças</button>
            <button class="btn-filtro filtro-bermuda">Bermudas</button>
        </div>

    </main>
    <!-- Jquery 3.x -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Slick js -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <!-- personal js -->
    <script type="text/javascript" src="js/slickConfig.js"></script>
    <script type="text/javascript" src="js/contentAjax.js"></script>
        
</body>
</html>