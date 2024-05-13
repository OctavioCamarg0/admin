<?php
require_once "../includes/cabecacalho.php";

require_once __DIR__ . "/../controller/UsuarioController.php";

$usuarioController = new UsuarioController();
$usuarios = $usuarioController->index();

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
                    <h2 class="text-center">Lista de Usuários</h2>
                    <a href="cadastrar.php" class="btn btn-primary">Cadastrar</a>
                </div>


                <hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Foto</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                          
                            <th>Ação</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($usuarios as $usuario): ?>

                        <tr>
                            <td><?=$usuario->id_usuario?></td>
                            <td><img src="<?=$usuario->foto?>" alt=""></td>
                            <td><?=$usuario->nome?></td>
                            <td><?=$usuario->email?></td>
                          
                            <td><a href="editar.php?id_usuario=<?=$usuario->id_usuario ?>" class="btn btn-primary">Editar</a></td>
                            <td><a href="visualizar.php?id_usuario=<?=$usuario->id_usuario ?>" class="btn btn-primary">Visualizar</a></td>
                            <td><a href="deletar.php?id_usuario=<?=$usuario->id_usuario ?>" onclick="return confirm('Tem certeza que deseja deletar o usuário?')" class="btn btn-danger">Excluir</a></td>
                        </tr>
                        <?php
                            endforeach;
                        ?>
                    </tbody>
                </table>


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