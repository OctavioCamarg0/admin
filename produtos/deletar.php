<?php

require_once __DIR__."/../controller/ProdutoController.php";

if(isset($_GET["id_produto"]) && !empty($_GET["id_produto"])){

    $produtoController = new ProdutoController();

    if($produtoController->deletar($_GET["id_produto"])){
        header("Location:index.php");
        exit;
    }
    else {
        echo "Não foi possível Deletar o Registro";
    }
}

header("Location: index.php");
exit;