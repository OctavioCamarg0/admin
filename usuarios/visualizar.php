

<?php
    require_once "../includes/cabecacalho.php";
 
    require_once __DIR__ . "/../controller/UsuarioController.php";
 
    $usuarioController = new UsuarioController();
 
    $usuario = $usuarioController->visualizar($_GET['id_usuario']);
?>

<div class="container">

    <?php
    include_once "../includes/cabecalhoAdmin.php";
    ?>

    <main>
        <div class="row">

            <?php
            include_once "../includes/menuAdmin.php";
            ?>
            <div id="conteudo" class="col-md-10">
                <div class="d-flex justify-content-between mt-3">
                    <h2 class="text-center">Visualizar Usuário</h2>
                </div>


                <hr>
                
                <table class="table">
                <tr>
                    <th width="100"> FOTO: </th>
                    <td><img src=<?=$usuario->foto ?> alt="bathas"></td>
                </tr>
                <tr>
                    <th>ID: </th>
                    <td><?=$usuario->id_usuario ?></td>
                </tr>
                <tr>
                    <th>NOME: </th>
                    <td><?=$usuario->nome ?></td>
                </tr>
                <tr>
                    <th>E-MAIL: </th>
                    <td><?=$usuario->email ?></td>
                </tr>
                <tr>
                    <th>Telefone: </th>
                    <td><?=$usuario->telefone ?></td>
                </tr>
            </table>

                <a href="editar.php" class="btn btn-primary">Editar</a>
                <a href="index.php" class="btn btn-secondary">Cancelar</a>

            </div>
        </div>
    </main>


    <?php
    include_once "../includes/rodapeAdmin.php";
    ?>
</div>





<?php
require_once "../includes/rodape.php";
?>