<?php

require_once __DIR__."../../model/Cliente.php";

class ClienteController{

    public function index(){
        $cliente = new Cliente();
        return $cliente->listar();
    }


/**
 * Retorna o registro
 *
 * @return iterable | object
 */

    public function visualizar($ID_CLIENTE){
        $cliente = new Cliente();
        return $cliente->buscar($ID_CLIENTE);
    }

    public function cadastrar(){
        if($_POST){
            
            $cliente = new Cliente();
            $cliente->NOME = $_POST['NOME'];
            $cliente->EMAIL = $_POST['EMAIL'];
            $cliente->TELEFONE = $_POST['TELEFONE'];
            $cliente->CPF = $_POST['CPF'];
            $cliente->DATA_NACIMENTO = $_POST['DATA_NASCIMENTO'];

            if ($cliente->cadastrar()){
                header("location:index.php");
                exit;
            }else{
                echo "Erro ao castrar o usuario";
            }
        }
    }
    
    public function editar($ID_CLIENTE){
 
        if($_POST){
         
          $cliente = new Cliente();
          $cliente->NOME = $_POST['NOME'];
          $cliente->EMAIL = $_POST['EMAIL'];
          $cliente->TELEFONE = $_POST["TELEFONE"];
          $cliente->CPF = $_POST["CPF"];
          $cliente->DATA_NACIMENTO = $_POST["DATA_NASCIMENTO"];
     
          if($cliente->atualizar($ID_CLIENTE)){
            header("Location:index.php");
            exit;
          }else{
            echo"Erro ao atualizar o usuario";
          }
     
         }else{
          $cliente = new Cliente();
          return $cliente->buscar($ID_CLIENTE);
         }
      }
    
    public function deletar($ID_CLIENTE){
        $cliente = new Cliente();
        $cliente->deletar($ID_CLIENTE);
    }
    
}
