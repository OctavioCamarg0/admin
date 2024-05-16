<?php

require_once __DIR__."/../database/DBConexao.php";

class Produto{
    public $id_produto;
    public $titulo;
    public $descricao;
    public $valor;
    public $foto;

    private $db;

    public function __construct()
    {
        $this->db = DBConexao::getConexao();
    }

    //Método para listar todos os usuários da tabela
    public function listar(){
        $sql = "SELECT * FROM produtos";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Buscar um unico registro da tabela usuário
     * 
     * @param int $id_usuario identificação do Usuário
     * @return array|false Retorna um registro do usuário ou falso caso não encontre
     * 
     */

     public function buscar($id_produto){
        $sql = "SELECT * FROM produtos WHERE id_produto = :id_produto";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_produto", $id_produto, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Cadastrar os dados de usuário na tabela
     * 
     * @return true|false Retorna se o registro foi cadastrado com sucesso
     */

     public function cadastrar() {
        
        $sql = "INSERT INTO produtos (titulo, descricao, valor, foto)  
                        VALUES(:titulo, :descricao, :valor, :foto)";
    
        $stmt = $this->db->prepare($sql);
        
        $stmt->bindParam(':titulo', $this->titulo);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':valor', $this->valor);
        $stmt->bindParam(':foto', $this->foto);
        
        return $stmt->execute();
    }
    
    //Atualizar os dados do usuário selecionado
    public function atualizar ($ID_CLIENTE){

        $sql = "UPDATE produtos SET titulo=:titulo, descricao=:descricao, valor=:valor, foto=:foto 
                        WHERE id_produto=:id_produto";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':titulo', $this->titulo);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':valor', $this->valor);
        $stmt->bindParam(':foto', $this->foto);
        $stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);

        return $stmt->execute();

    }
    
    //Excluir o dado do usuário selecionado
    public function deletar ($id_produto){
        $sql = "DELETE FROM produtos where id_produto = :id_produto";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id_produto", $id_produto, PDO::PARAM_INT);

        return $stmt->execute();
    }
}