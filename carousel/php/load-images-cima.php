<?php
   
    include "conexao.php";

    $query = "SELECT * FROM pecas WHERE `posicao` = 0";
    $resultado = $conector->query($query);
             
    while($dados = $resultado->fetch_array()){
        echo '<div id="'. $dados['idPecas'] .'" class="imagem-cima itens"><img src="data:image/jpeg;base64,' . base64_encode( $dados['imagem'] ) . '" ></div>';
    }
    
?>