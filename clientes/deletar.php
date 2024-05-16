<?php

require_once __DIR__."/../controller/ClienteController.php";

if(isset($_GET["ID_CLIENTE"]) && !empty($_GET["ID_CLIENTE"])){

    $ClienteController = new ClienteController();

    if($ClienteController->deletar($_GET["ID_CLIENTE"])){
        header("Location:index.php");
        exit;
    }
    else {
        echo "Não foi possível Deletar o Registro";
    }
}

header("Location: index.php");
exit;