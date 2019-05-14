<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "bd_pecas";

    $conector = new mysqli($servidor, $usuario, $senha, $banco);

    if(mysqli_connect_errno()) {
        trigger_error(mysqli_connect_errno());
    }


?>
