<?php

require_once __DIR__."../../model/Produto.php";

class ProdutoController {

    public function index(){
        $produtos = new Produto;
        return $produtos->listar(); 
    }

    public function visualizar($id_produto) {
        $produto = new Produto;
        return $produto->buscar($id_produto);
    }

    public function cadastrar(){
        if($_POST){
            
            $produto = new Produto();
            $produto->titulo = $_POST['titulo'];
            $produto->descricao = $_POST['descricao'];
            $produto->valor = $_POST['valor'];
            $produto->foto = $_POST['foto'];

            if ($produto->cadastrar()){
                header("location:index.php");
                exit;
            }else{
                echo "Erro ao castrar o usuario";
            }
        }
    }

    public function editar($id_produto){
 
        if($_POST){
         
            $produto = new Produto();
            $produto->titulo = $_POST['titulo'];
            $produto->descricao = $_POST['descricao'];
            $produto->valor = $_POST['valor'];
            $produto->foto = $_POST['foto'];

          
     
            if($produto->atualizar($id_produto)){
                header("Location:index.php");
                exit;
            }else{
                echo"Erro ao atualizar o usuario";
            }
     
        }else{
            $produto = new Produto();
            return $produto->buscar($id_produto);
        }
    }
    
    public function deletar($id_produto){
        $produto = new Produto();
        $produto->deletar($id_produto);
    }

    
}