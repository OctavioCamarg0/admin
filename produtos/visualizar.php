

<?php
    require_once "../includes/cabecacalho.php";
 
    require_once __DIR__ . "/../controller/ProdutoController.php";
 
    $produtoController = new ProdutoController();
 
    $produto = $produtoController->visualizar($_GET['id_produto']);
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
                    <h2 class="text-center">Visualizar Produto</h2>
                </div>

                <hr>
                
                <table class="table">
                
                <tr>
                    <th>ID: </th>
                    <td><?=$produto->id_produto ?></td>
                </tr>
                <tr>
                    <th>Titulo: </th>
                    <td><?=$produto->titulo ?></td>
                </tr>

                <tr>
                    <th>Descrição:</th>
                    <td><?=$produto->descricao ?></td>
                </tr>

                <tr>
                    <th>Valor: </th>
                    <td><?=$produto->valor ?></td>
                </tr>
                <tr>
                    <th>Foto: </th>
                    <td><?=$produto->foto ?></td>
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