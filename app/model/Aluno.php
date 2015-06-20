<?php

class Aluno extends Model {

    private $cpf;
    private $nome;
    private $email;
    private $fone;
    private $datanasc;

    public function __construct($cpf = null, $nome = null, $email = null, $fone = null, $datanasc = null) {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
        $this->fone = $fone;
        $this->datanasc = $datanasc;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFone() {
        return $this->fone;
    }

    public function getDatanasc() {
        return $this->datanasc;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setFone($fone) {
        $this->fone = $fone;
    }

    public function setDatanasc($datanasc) {
        $this->datanasc = $datanasc;
    }
    

}
