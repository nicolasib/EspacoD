<?php

    include_once "../php/conexao.php";

    function posicaoRoupa($tipo_peca){
        if($tipo_peca == 'camisa' || $tipo_peca == 'cropped' || $tipo_peca == 'top' || $tipo_peca == 'moletom'){
            return 0;
        }else
        if($tipo_peca == 'calca' || $tipo_peca == 'short' || $tipo_peca == 'bermuda' || $tipo_peca == 'saia'){
            return 1;
        }else{
            return 2;
        }
    }

    if(mysqli_connect_errno()) {
        trigger_error(mysqli_connect_errno());
    }

    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $tamanho = $_POST['tamanho'];
    $tipo_peca = $_POST['tipo'];
    $cor = $_POST['cor'];
    $descricao = $_POST['descricao'];
    $posicao = posicaoRoupa($tipo_peca);
    $marca = $_POST['marca'];

    $imagem = $_FILES['imagem']['tmp_name'];
    $tamanho_img = $_FILES['imagem']['size'];
    $tipo_imagem = $_FILES['imagem']['type'];
    $nome_img = $_FILES['imagem']['name'];

    if ( $imagem != "none" )
    {
        $fp = fopen($imagem, "rb");
        $conteudo = fread($fp, $tamanho_img);
        $conteudo = addslashes($conteudo);
        fclose($fp);

        $sql = "INSERT INTO pecas(quantidade, preco, tamanho, tipo, cor, descricao, posicao, marca, tamanho_img, tipo_img, nome_img, imagem)
                VALUES ('$quantidade', '$preco', '$tamanho', '$tipo_peca', '$cor', '$descricao', '$posicao', '$marca', '$tamanho_img', '$tipo_imagem', '$nome_img', '$conteudo')";

        mysqli_query($conector, $sql) or die("Falha ao realizar o registro. Tente novamente.");
        echo 'Registro realizado!';

        if(mysqli_affected_rows($conector) > 0)
            print "A imagem foi salva na base de dados.";
        else
            print "Não foi possível salvar a imagem na base de dados.";
    }


    
?>