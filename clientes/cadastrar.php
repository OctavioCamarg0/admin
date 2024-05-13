

<?php
require_once "../includes/cabecacalho.php";

require_once __DIR__ . "/../controller/ClienteController.php";

$cliente = new ClienteController();
$cliente->cadastrar();
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
                    <h2 class="text-center">Cadastrar Cliente</h2>
                </div>


                <hr>
                
                <form action="cadastrar.php" method="post">
                
                    <?php include_once "_form.php" ?>

                </form>


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