<?php

class Pessoa {

    private $cpf;
    private $nome;
    private $email;
    private $fone;
    private $data_nascimento;

    private function __construct() {

    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
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

    public function setFone($fone) {
        $this->fone = $fone;
    }

    public function getFone() {
        return $this->fone;
    }

    public function setDataNascimento($data) {
        $this->data_nascimento = $data;
    }

    public function getDataNascimento() {
        return $this->data_nascimento;
    }

    public function getPessoa() {
        $pessoa = array();
    }

}
