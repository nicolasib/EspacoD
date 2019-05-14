<?php

    function imprimirImg(){
        include "conexao.php";
        $query = "SELECT * FROM pecas";
        $resultado = $conector->query($query);
        
        
        while($dados = $resultado->fetch_array()){
            echo '<div id="'. $dados['idPecas'] .'" class="imagem itens"><img src="data:image/jpeg;base64,' . base64_encode( $dados['imagem'] ) . '" ></div>';
        }
    }

?>