<?php

require_once __DIR__."/../database/DBConexao.php";

class Usuario{
    public $id_usuario;
    public $nome;
    public $email;
    public $senha;
    public $foto;
    public $telefone;

    private $db;

    public function __construct()
    {
        $this->db = DBConexao::getConexao();
    }

    //Método para listar todos os usuários da tabela
    public function listar(){
        $sql = "SELECT * FROM usuarios";
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

     public function buscar($id_usuario){
        $sql = "SELECT * FROM usuarios WHERE id_usuario = :id_usuario";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_usuario", $id_usuario, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Cadastrar os dados de usuário na tabela
     * 
     * @return true|false Retorna se o registro foi cadastrado com sucesso
     */

     public function cadastrar() {
        
        $sql = "INSERT INTO usuarios (nome, email, senha, telefone)  
                        VALUES(:nome, :email, :senha, :telefone)";
    
        $stmt = $this->db->prepare($sql);
        
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':telefone', $this->telefone);
        
        return $stmt->execute();
    }
    
    
    //Atualizar os dados do usuário selecionado
    public function atualizar ($id_usuario){

        $sql = "UPDATE usuarios SET nome=:nome, email=:email, senha=:senha, telefone=:telefone
                        WHERE id_usuario=:id_usuario";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);

        return $stmt->execute();

    }
    
    //Excluir o dado do usuário selecionado
    public function deletar ($id_usuario){
        $sql = "DELETE FROM usuarios WHERE id_usuario = :id_usuario";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id_usuario", $id_usuario, PDO::PARAM_INT);

        return $stmt->execute();
    }
}