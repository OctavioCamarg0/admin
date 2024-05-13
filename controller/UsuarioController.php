<?php

require_once __DIR__."../../model/Usuario.php";

class UsuarioController{

    public function index(){
        $usuarios = new Usuario();
        return $usuarios->listar();
    }


/**
 * Retorna o registro
 *
 * @return iterable | object
 */

    public function visualizar($id_usuario){
        $usuario = new Usuario();
        return $usuario->buscar($id_usuario);
    }

    public function cadastrar(){
        if($_POST){
            
            $usuario = new Usuario();
            $usuario->nome = $_POST['nome'];
            $usuario->email = $_POST['email'];
            $usuario->senha = $_POST['senha'];
            $usuario->telefone = $_POST['telefone'];

            if ($usuario->cadastrar()){
                header("location:index.php");
                exit;
            }else{
                echo "Erro ao castrar o usuario";
            }
        }
    }
    
    public function editar($id_usuario){
 
        if($_POST){
         
          $usuario = new Usuario();
          $usuario->nome = $_POST["nome"];
          $usuario->email = $_POST["email"];
          $usuario->senha = $_POST["senha"];
          $usuario->telefone = $_POST["telefone"];

          
     
          if($usuario->atualizar($id_usuario)){
            header("Location:index.php");
            exit;
          }else{
            echo"Erro ao atualizar o usuario";
          }
     
         }else{
          $usuario = new Usuario();
          return $usuario->buscar($id_usuario);
         }
      }
    
    public function deletar($id_usuario){
        $usuario = new Usuario();
        $usuario->deletar($id_usuario);
    }
    
}
