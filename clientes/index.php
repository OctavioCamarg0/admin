<?php
require_once "../includes/cabecacalho.php";

require_once __DIR__ . "/../controller/ClienteController.php";

$ClienteController = new ClienteController();
$clientes = $ClienteController->index();

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
                    <h2 class="text-center">Lista de Clientes</h2>
                    <a href="cadastrar.php" class="btn btn-primary">Cadastrar</a>
                </div>


                <hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Data de Nascimento</th>

                            <th>Ação</th>
                        </tr>
                    </thead>

                    <tbody>



                        <?php foreach ($clientes as $cliente) : ?>

                            <tr>
                                <td><?= $cliente->ID_CLIENTE ?></td>
                                <td><?= $cliente->NOME ?></td>
                                <td><?= $cliente->TELEFONE ?></td>
                                <td><?= $cliente->EMAIL ?></td>

                                <td><a href="editar.php?ID_CLIENTE=<?=$cliente->ID_CLIENTE ?>" class="btn btn-primary">Editar</a></td>
                                <td><a href="visualizar.php?ID_CLIENTE=<?= $cliente->ID_CLIENTE ?>" class="btn btn-primary">Visualizar</a></td>
                                <td><a href="deletar.php" class="btn btn-danger">Excluir</a></td>
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