<?php
    include "conexao.php";

    $id = $_POST['id'];

    $query = 'SELECT * FROM pecas WHERE `idPecas` = '.$id;
    $resultado = $conector->query($query);

    $resultado = mysqli_fetch_assoc($resultado);

    echo '<h2 class="marca-tipo">'.$resultado['tipo'].' - '.$resultado['marca'].'</h2>';
    echo '<span class="desc">'.$resultado['descricao'].'</span>';
    echo '<h2 class="preco">R$ '.$resultado['preco'].'</h2>';


?>
<!--
    <h2 class="marca-tipo">Camisa - Gucci</h2>
    <span class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at vestibulum arcu. Maecenas fermentum tellus quis laoreet bibendum. Aliquam non tristique tellus.</span>
    <h2 class="valor">R$ 23,50</h2>
-->