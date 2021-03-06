<?php

class Model {

  public function query($sql, $data = null) {
    $p_sql = Connection::getInstance()->prepare($sql);
    $p_sql->execute($data);
    return $p_sql->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getPotatos() { // retorna o nome das colunas
    $arrayPropriedades = (array) $this;
    $temp = array();
    $r = array();
    $temp['original'] = $arrayPropriedades;

    while (list ($key, $value) = each($arrayPropriedades)) {
      $aux = explode("\0", $key);
      $newkey = $aux[count($aux) - 1];
      $r[$newkey] = &$temp['original'][$key];
    }

    return $r;
  }

  public function retrieve() {
    $tableName =  strtolower((get_class($this))); // buscar o nome da tabela
    //$tableName = str_replace("controller","",$tableName);
    $sql = "SELECT * FROM " . $tableName;
    $p_sql = Connection::getInstance()->prepare($sql);
    $p_sql->execute();
    return $p_sql->fetchAll(PDO::FETCH_ASSOC);
  }

  public function create() {
    $model = $this;
    try {
      $sql = "INSERT INTO " . strtolower(get_class($this));
      $propriedades = $this->getPotatos();
      $p = [];
      $p2 = [];
      $v = [];
      foreach ($propriedades as $propriedade => $valor) {
        $p[] = $propriedade;
        $p2[] = ':' . $propriedade;
        $get = 'get' . ucfirst($propriedade);
      }
      $sql .= '(' . implode(',', $p) . ') VALUES (' . implode(',', $p2) . ')';

      $p_sql = Connection::getInstance()->prepare($sql);

      foreach ($propriedades as $propriedade => $valor) {
        $p = ':' . $propriedade;
        $get = 'get' . ucfirst($propriedade);
        //                if (!is_numeric($valor)) {
        //                    $v = '\'' . $model->$get() . '\'';
        //                } else {
        //
        //                }
        $v = $model->$get();
        $p_sql->bindValue($p, $v);
      }

      return $p_sql->execute();
    } catch (PDOException $e) {
      echo 'Error: ' . $e->getMessage();
    }
  }

  public function findbyAttributes($atributo) {

  }

  public function update($param)
  {
    $model = $this;
    try {
      $sql = "UPDATE " . strtolower(get_class($this)) . " SET ";
      $propriedades = $this->getPotatos();
      $p = [];
      $v = [];

      foreach ($propriedades as $propriedade => $valor)
      {
        $p[] = $propriedade . ' = ' . ':' . $propriedade;
      }
      $sql .= implode(',', $p);

      $sql .= " WHERE id = $param";

      $p_sql = Connection::getInstance()->prepare($sql);

      foreach ($propriedades as $propriedade => $valor)
      {
        $p = ':' . $propriedade;
        $get = 'get' . ucfirst($propriedade);

        $v = $model->$get();
        $p_sql->bindValue($p, $v);
      }

      $p_sql->execute();
      return true;

    }

    catch (PDOException $e)
    {
      echo 'Error: ' . $e->getMessage();
    }
  }

  public function delete($p) {

    $tableName =  strtolower(get_class($this)); // buscar o nome da tabela
    //$tableName = str_replace("controller","",$tableName);
    $sql = "DELETE FROM $tableName WHERE id = $p";
    $p_sql = Connection::getInstance()->prepare($sql);
    $p_sql->execute();
    return true;

  }

}
