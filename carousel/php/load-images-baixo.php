<?php
   
    include "conexao.php";

    $tipo = $_POST['filtro'];

    if($tipo == '*')
        $query = "SELECT * FROM pecas WHERE `posicao` = 1";
    else
        $query = "SELECT * FROM pecas WHERE `posicao` = 1 AND `tipo` = ".$tipo;

    $resultado = $conector->query($query);
             
    while($dados = $resultado->fetch_array()){
        echo '<div id="'. $dados['idPecas'] .'" class="imagem-baixo itens"><img src="data:image/jpeg;base64,' . base64_encode( $dados['imagem'] ) . '" ></div>';
    }
    
?>