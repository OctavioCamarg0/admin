<?php

class DBConexao{

    private $host = "localhost";
    private $dbname = "lojinha";
    private $username = "root";
    private $password = "";

    private static $instance = null;
    private $conex;



private function __construct(){
    
    try {
        $this ->conex = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8",$this->username, $this->password);

        $this ->conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e){
        echo "Erro de conexão com o banco de dados: " . $e ->getMessage();
    }
}

public static function getConexao(){

    if (!self::$instance){
        self::$instance = new DBConexao();
    }
    return self::$instance->conex;
}
}

// $db = DBConexao::getConexao();

// if($db){
//     echo "Conexão realizada com sucesso";
// }