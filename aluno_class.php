<?php

require_once 'pessoa_class.php';

class Aluno extends Pessoa {

    public static $instance;

    private function __construct() {
        
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new Aluno();
        return self::$instance;
    }

    public function insert(Pessoa $usuario) {
        $sql = "INSERT INTO usuario (		
                nome,
                email,
                data_nascimento) 
                VALUES (
                :nome,
                :email,
                :data_nascimento)";

        $p_sql = Connection::getInstance()->prepare($sql);
        $p_sql->bindValue(":nome", $usuario->getNome());
        $p_sql->bindValue(":email", $usuario->getEmail());
        $p_sql->bindValue(":senha", $usuario->getDataNasc());

        return $p_sql->execute();
    }
    
}
