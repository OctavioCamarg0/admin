

<?php
    require_once "../includes/cabecacalho.php";
 
    require_once __DIR__ . "/../controller/ClienteController.php";
 
    $clienteController = new ClienteController();
 
    $cliente = $clienteController->visualizar($_GET['ID_CLIENTE']);
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
                    <h2 class="text-center">Visualizar Cliente</h2>
                </div>


                <hr>
                
                <table class="table">
                
                <tr>
                    <th>ID: </th>
                    <td><?=$cliente->ID_CLIENTE ?></td>
                </tr>
                <tr>
                    <th>Nome: </th>
                    <td><?=$cliente->NOME ?></td>
                </tr>

                <tr>
                    <th>CPF:</th>
                    <td><?=$cliente->CPF ?></td>
                </tr>

                <tr>
                    <th>E-mail: </th>
                    <td><?=$cliente->EMAIL ?></td>
                </tr>
                <tr>
                    <th>Telefone: </th>
                    <td><?=$cliente->TELEFONE ?></td>
                </tr>

                <tr>
                    <th>Data de Nascimento</th>
                    <td><?=$cliente->DATA_NASCIMENTO ?></td>
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