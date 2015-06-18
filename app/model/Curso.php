<?php

/**
 * Description of Curso
 *
 * @author luisaugustosilva
 */
class Curso extends Model {
    
    private $nome;
    private $carga_horaria;
    
    public function __construct($nome = null, $carga_horaria = null) {
        $this->nome = $nome;
        $this->carga_horaria = $carga_horaria;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getCarga_horaria() {
        return $this->carga_horaria;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCarga_horaria($carga_horaria) {
        $this->carga_horaria = $carga_horaria;
    }



}
