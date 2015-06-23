<?php

/**
 * Description of Turma
 *
 * @author Luis Augusto Silva - luis.bc@hotmail.com
 */
class Turma extends Model{

    private $curso_id;
    private $data_inicio;
    private $data_final;

    public function __construct($curso_id = null, $data_inicio = null, $data_fim = null) {
        $this->curso_id = $curso_id;
        $this->data_inicio = $data_inicio;
        $this->data_final = $data_fim;
    }

    public function getCurso_id() {
        return $this->curso_id;
    }

    public function getData_inicio() {
        return $this->data_inicio;
    }

    public function getData_final() {
        return $this->data_final;
    }

    public function setCurso_id($curso_id) {
        $this->curso_id = $curso_id;
    }

    public function setData_inicio($data_inicio) {
        $this->data_inicio = $data_inicio;
    }

    public function setData_final($data_final) {
        $this->data_final = $data_final;
    }

    public function retrieve() {

        $sql = "SELECT turma.id,"
                . "    turma.data_inicio,"
                . "    turma.data_final, "
                . "    curso.nome "
                . "    FROM turma"
                . "    JOIN curso on turma.curso_id = curso.id";

        return $this->query($sql);
    }
}
