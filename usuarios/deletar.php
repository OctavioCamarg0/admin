<?php

require_once __DIR__."/../controller/UsuarioController.php";

if(isset($_GET["id_usuario"]) && !empty($_GET["id_usuario"])){

    $usuarioController = new UsuarioController();

    if($usuarioController->deletar($_GET["id_usuario"])){
        header("Location:index.php");
        exit;
    }
    else {
        echo "Não foi possível Deletar o Registro";
    }
}

header("Location: index.php");
exit;
