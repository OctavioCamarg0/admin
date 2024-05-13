

<?php
    require_once "includes/cabecacalho.php";
?>

    <div class="container">
        
        <?php 
        include_once "includes/cabecalhoAdmin.php";
        ?>

        <main>
            <div class="row">
                
            <?php
                include_once "includes/menuAdmin.php";
            ?>
                <div id="conteudo" class="col-md-10">
                    <h2 class="text-center mt-3">Seja Bem-vindo, <?=$_SESSION['nome'] ?></h2>
                </div>
            </div>
        </main>


        <?php
            include_once "includes/rodapeAdmin.php" ;
        ?>
    </div>

    
    


    <?php
    require_once "includes/rodape.php";
    ?>