<?php

class Professor extends Model{
    
    private $nome;
    private $email;
    
    public function __construct($nome = null, $email = null) {
        $this->nome = $nome;
        $this->email = $email;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }


}
