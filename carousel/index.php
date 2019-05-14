<?php
    include_once "php/conexao.php";
    include_once "php/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carousel</title>
    <!-- Slick css -->
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
                        <div class="single-item">
                            <?php imprimirImg() ?>
                        </div>
                    </div>
                    <button class="next-cima">></button>
                    
                </div>
                <div class="contentholder">

                </div>
            </div>
        </section>
    </main>

    <!-- Jquery 3.x -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Slick js -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Main.js -->
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var idCima = $('.slick-active').attr('id');
            $('.contentholder').load('php/load-content.php', {id: idCima});
            
            $('.prev-cima').click(function(){
                var idCima = $('.slick-active').attr('id');
                $('.contentholder').load('php/load-content.php', {id: idCima});
            });
            $('.next-cima').click(function(){
                var idCima = $('.slick-active').attr('id');
                $('.contentholder').load('php/load-content.php', {id: idCima});
            });
        })
</script>
        
</body>
</html>