

<?php
require_once "../includes/cabecacalho.php";

require_once __DIR__ . "/../controller/ProdutoController.php";

$produtoController = new ProdutoController();

$produto = $produtoController->editar($_GET['id_produto']);
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
                    <h2 class="text-center">Editar Usuário</h2>
                </div>


                <hr>
                <form action="editar.php?id_produto=<?=$_GET['id_produto'] ?>" method="post">
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