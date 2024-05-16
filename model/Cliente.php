<?php

require_once __DIR__."/../database/DBConexao.php";

class Cliente{
    public $ID_CLIENTE;
    public $NOME;
    public $CPF;
    public $EMAIL;
    public $TELEFONE;
    public $DATA_NACIMENTO;

    private $db;

    public function __construct()
    {
        $this->db = DBConexao::getConexao();
    }

    //Método para listar todos os usuários da tabela
    public function listar(){
        $sql = "SELECT * FROM clientes";
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

     public function buscar($ID_CLIENTE){
        $sql = "SELECT * FROM clientes WHERE ID_CLIENTE = :ID_CLIENTE";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ID_CLIENTE", $ID_CLIENTE, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Cadastrar os dados de usuário na tabela
     * 
     * @return true|false Retorna se o registro foi cadastrado com sucesso
     */

     public function cadastrar() {
        
        $sql = "INSERT INTO clientes (NOME, EMAIL, TELEFONE, CPF, DATA_NASCIMENTO)  
                        VALUES(:NOME, :EMAIL, :TELEFONE, :CPF, :DATA_NASCIMENTO)";
    
        $stmt = $this->db->prepare($sql);
        
        $stmt->bindParam(':NOME', $this->NOME);
        $stmt->bindParam(':EMAIL', $this->EMAIL);
        $stmt->bindParam(':TELEFONE', $this->TELEFONE);
        $stmt->bindParam(':CPF', $this->CPF);
        $stmt->bindParam(':DATA_NASCIMENTO', $this->DATA_NACIMENTO);
        
        return $stmt->execute();
    }
    
    //Atualizar os dados do usuário selecionado
    public function atualizar ($ID_CLIENTE){

        $sql = "UPDATE clientes SET NOME=:NOME, EMAIL=:EMAIL, TELEFONE=:TELEFONE, CPF=:CPF, DATA_NASCIMENTO=:DATA_NASCIMENTO 
                        WHERE ID_CLIENTE=:ID_CLIENTE";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':NOME', $this->NOME);
        $stmt->bindParam(':EMAIL', $this->EMAIL);
        $stmt->bindParam(':TELEFONE', $this->TELEFONE);
        $stmt->bindParam(':CPF', $this->CPF);
        $stmt->bindParam(':DATA_NASCIMENTO', $this->DATA_NACIMENTO);
        $stmt->bindParam(':ID_CLIENTE', $ID_CLIENTE, PDO::PARAM_INT);

        return $stmt->execute();

    }
    
    //Excluir o dado do usuário selecionado
    public function deletar ($ID_CLIENTE){
        $sql = "DELETE FROM clientes where ID_CLIENTE = :ID_CLIENTE";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":ID_CLIENTE", $ID_CLIENTE, PDO::PARAM_INT);

        return $stmt->execute();
    }
}