<?php

/**
 * Description of Turma
 *
 * @author Luis Augusto Silva - luis.bc@hotmail.com
 */
class Turma extends Model{
    
    private $curso_id;
    private $data_inicio;
    private $data_fim;
    
    public function __construct($curso_id, $data_inicio, $data_fim) {
        $this->curso_id = $curso_id;
        $this->data_inicio = $data_inicio;
        $this->data_fim = $data_fim;
    }
    
    public function getCurso_id() {
        return $this->curso_id;
    }

    public function getData_inicio() {
        return $this->data_inicio;
    }

    public function getData_fim() {
        return $this->data_fim;
    }

    public function setCurso_id($curso_id) {
        $this->curso_id = $curso_id;
    }

    public function setData_inicio($data_inicio) {
        $this->data_inicio = $data_inicio;
    }

    public function setData_fim($data_fim) {
        $this->data_fim = $data_fim;
    }



    
}
