<?php

/**
* Description of CursoController
*
* @author luisaugustosilva
*/
class TurmaController extends Controller {

  public function getCurso() {
    $curso = new Curso();
    $cursos = $curso->retrieve();
    return $cursos;
  }

  public function cadastrar() {
    $this->cursos = $this->getCurso();
    $this->view = 'form';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $a = new Turma();
      $a->setCurso_id($_POST['curso']);
      $a->setData_final($_POST['data_fim']);
      $a->setData_inicio($_POST['data_ini']);
      if ($a->create()) {
        header('location:' . BASE_URL);
      } else {
        echo "<script>alert('Erro')</script>";
        //header('location:' . BASE_URL);
      }
    }
  }
}
