<?php

require_once 'model/AlunoModel.php';

class Aluno {

    private $cpf;
    private $nome;
    private $email;
    private $fone;
    private $data_nascimento;

    public function __construct() {

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
// ** está inserindo aluno no banco **
//$aluno = new Aluno();
//$aluno->setCpf('00000000000');
//$aluno->setNome('JOAO');
//$aluno->setFone('0000');
//$aluno->setEmail('pessoa@pessoa');
//$retorno = AlunoModel::getInstance()->insert($aluno);
//var_dump($retorno);


// *** retorna toda a tabela aluno
$retorno = AlunoModel::getInstance()->getAluno();
var_dump($retorno);


