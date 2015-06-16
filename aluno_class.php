<?php

require_once 'connection.php';
require_once 'pessoa_class.php';

class Aluno extends Pessoa {

  public static $instance;

  private function __construct() {

  }

  public function getInstance() {
    if (!isset(self::$instance))
    self::$instance = new Aluno();
    return self::$instance;
  }

  public function insert(Pessoa $aluno) {

    try
    {

      $sql = "INSERT INTO aluno (cpf, nome, email, fone, data_nascimento) VALUES (:cpf, :nome, :email, :fone, :data_nascimento)";

      $p_sql = Connection::getInstance()->prepare($sql);
      $p_sql->bindValue(":cpf", $aluno->getCpf());
      $p_sql->bindValue(":nome", $aluno->getNome());
      $p_sql->bindValue(":email", $aluno->getEmail());
      $p_sql->bindValue(":fone", $aluno->getFone());
      $p_sql->bindValue(":data_nascimento", $aluno->getDataNascimento());

      return $p_sql->execute();

    }

    catch(PDOException $e)
    {
      echo 'Error: ' . $e->getMessage();
    }

  }

}


?>
