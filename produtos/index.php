<?php
require_once "../includes/cabecacalho.php";

require_once __DIR__ . "/../controller/ProdutoController.php";

$produtoController = new ProdutoController();
$produtos = $produtoController->index();

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
                    <h2 class="text-center">Lista de Produtos</h2>
                    <a href="cadastrar.php" class="btn btn-primary">Cadastrar</a>
                </div>


                <hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Foto</th>
                            <th>Titulo</th>
                            <th>Valor</th>
                          
                            <th>Ação</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($produtos as $produto): ?>

                        <tr>
                            <td><?=$produto->id_produto?></td>
                            <td><img src="<?=$produto->foto?>" alt=""></td>
                            <td><?=$produto->titulo?></td>
                            <td><?=$produto->valor?></td>
                          
                            <td><a href="editar.php?id_produto=<?=$produto->id_produto ?>" class="btn btn-primary">Editar</a></td>
                            <td><a href="visualizar.php?id_produto=<?=$produto->id_produto ?>" class="btn btn-primary">Visualizar</a></td>
                            <td><a href="deletar.php?id_produto=<?=$produto->id_produto ?>" onclick="return confirm('Tem certeza que deseja deletar o produto?')" class="btn btn-danger">Excluir</a></td>
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