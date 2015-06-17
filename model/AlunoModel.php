<?php

require_once 'connection.php';

class AlunoModel {

  public static $instance;

  private function __construct() {

  }

  public static function getInstance() {
    if (!isset(self::$instance))
    self::$instance = new AlunoModel();
    return self::$instance;
  }
  
  public static function getAluno() {
      $sql = "SELECT * FROM aluno";
      $p_sql = Connection::getInstance()->prepare($sql);
      $p_sql->execute();
      return $p_sql->fetchAll(PDO::FETCH_ASSOC);
  }
  
  public static function insert($aluno) {

    try {

      $sql = "INSERT INTO aluno (cpf, nome, email, fone, data_nascimento) VALUES (:cpf, :nome, :email, :fone, :data_nascimento)";

      $p_sql = Connection::getInstance()->prepare($sql);
      $p_sql->bindValue(":cpf", $aluno->getCpf());
      $p_sql->bindValue(":nome", $aluno->getNome());
      $p_sql->bindValue(":email", $aluno->getEmail());
      $p_sql->bindValue(":fone", $aluno->getFone());
      $p_sql->bindValue(":data_nascimento", $aluno->getDataNascimento());

      return $p_sql->execute();
    }

    catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
    }
  }
}

    
