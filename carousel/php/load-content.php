<?php

    
    if(isset($_POST['method']) && $_POST['method'] == 'loadContentCima'){
        loadContentCima();
    }else if(isset($_POST['method']) && $_POST['method'] == 'loadContentBaixo'){
        loadContentBaixo();
    }



    function loadContentCima(){
        include "conexao.php";
        $id = $_POST['idCima'];

        $query = 'SELECT * FROM pecas WHERE `idPecas` = '.$id;
        $resultado = $conector->query($query);

        $resultado = mysqli_fetch_assoc($resultado);

        echo '<h2 class="marca-tipo">'.$resultado['tipo'].' - '.$resultado['marca'].'</h2>';
        echo '<span class="desc">'.$resultado['descricao'].'</span>';
        echo '<h2 class="preco">R$ '.$resultado['preco'].'</h2>';
    }

    function loadContentBaixo(){
        include "conexao.php";
        $id = $_POST['idBaixo'];

        $query = 'SELECT * FROM pecas WHERE `idPecas` = '.$id;
        $resultado = $conector->query($query);

        $resultado = mysqli_fetch_assoc($resultado);

        echo '<h2 class="marca-tipo">'.$resultado['tipo'].' - '.$resultado['marca'].'</h2>';
        echo '<span class="desc">'.$resultado['descricao'].'</span>';
        echo '<h2 class="preco">R$ '.$resultado['preco'].'</h2>';
    }


?>
<!--
    <h2 class="marca-tipo">Camisa - Gucci</h2>
    <span class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at vestibulum arcu. Maecenas fermentum tellus quis laoreet bibendum. Aliquam non tristique tellus.</span>
    <h2 class="valor">R$ 23,50</h2>
-->