<?php

require_once "connection.php";
require_once "utils/constantes.php";

class Pessoa {

    private $nome;
    private $email;
    private $data_nasc;
    private $fone;

    private function __construct() {
        
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = strtolower($email);
    }

    public function getDataNasc() {
        return $this->data_nasc;
    }

    public function setDataNasc($data) {
        $this->data_nasc = $data_nasc;
    }

    public function getPessoa() {
        $pessoa = array();
    }

}
