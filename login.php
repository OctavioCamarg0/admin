<?php
session_start();

$nome = "Octavio Camargo Cavalcante";
$email = "gooctavio28@gmail.com";
$senha = "octaviotat@";


if (isset($_SESSION['logado'])) {
    if ($_SESSION['logado'] == true) {
        header("Location: dashboard.php");
        exit;
    }
}


if (isset($_COOKIE['lembrar'])) {
 
    if ($_COOKIE['lembrar'] == $email) {
        $_SESSION['nome'] = $nome;
        $_SESSION['logado'] = true;
        header('Location: dashboard.php');
        exit;
    }
}


if (isset($_POST['btnEntrar'])) {


    if ($email == $_POST['email'] && $senha == $_POST['senha']) {

        $_SESSION['nome'] = $nome;
        $_SESSION['logado'] = true;

        $lembra = isset($_POST['lembrar']) ? true : false;

        if($lembra){
            setcookie("lembrar", $email, time() + (86400 * 30), "/");
        }

        header("Location: dashboard.php");
        exit;


    } else {
        $erro = "Usuário ou Senha inválido";
    }
}

?>

    <?php

    require_once "includes/cabecacalho.php"
    ?>

    <div class="container d-flex justify-content-center vh-100 align-items-center">

        <div id="login" class="border p-5 rounded-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            <h2 class="text-center">Login</h2>

            <?php
            if (isset($erro)): ?>

                <div class="alert alert-danger text-center">
                    <?= $erro ?>
                </div>
            <?php endif; ?>

            <form action="login.php" method="post">
                <div class="mb-3">
                    <label class="form-label" for="email">E-mail:</label>
                    <input name="email" type="email" id="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="senha">Senha: </label>
                    <input type="password" name="senha" id="senha" class="form-control">
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="lembrar" name="lembrar">
                    <label class="form-check-label" for="flexCheckChecked" for="lembrar"> Lembrar-me </label>
                </div>

                <div class="d-grid gap-2">
                    <button name="btnEntrar" class="btn btn-primary" type="submit">Entrar</button>
                </div>
            </form>
        </div>

    </div>

    <?php
    require_once "includes/rodape.php"
    ?>




    