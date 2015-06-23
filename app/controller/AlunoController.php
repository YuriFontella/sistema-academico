<?php

class AlunoController extends Controller {

  public function porcurso() {
    $this->view = 'retrieve';
    $aluno = new Aluno();
    $alunos = $aluno->query("SELECT * FROM aluno a JOIN curso c ON a.id = c.aluno_id ORDER BY a.id ASC");
    $this->alunos = $alunos;
  }

  public function matricula() {
    $this->view = 'matricula';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $a = new Aluno();
      $a->setNome($_POST['nome']);
      $a->setCpf($_POST['cpf']);
      $a->setEmail($_POST['email']);
      $a->setFone($_POST['fone']);
      $a->setDatanasc($_POST['datanasc']);

      if ($a->create()) {
        header('Location:' . BASE_URL . 'aluno/retrieve');
      } else
      {
        echo "<script>alert('Erro')</script>";
      }
    }
  }

  public function editar($p)
  {
    $this->view = 'matricula';
    $a = new Aluno();
    $aluno = $a->query("SELECT * FROM aluno WHERE id = $p");
    $this->aluno = $aluno;

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {

      $a->setNome($_POST['nome']);
      $a->setCpf($_POST['cpf']);
      $a->setEmail($_POST['email']);
      $a->setFone($_POST['fone']);
      $a->setDatanasc($_POST['datanasc']);

      $data = $a->update($p);
      if($data == true)
      {
        header('Location:' . BASE_URL . 'aluno/editar/' . $p);
      }
      else
      {
        echo "<script>alert('Erro')</script>";
      }
    }
  }

  public function delete($p)
  {
    $aluno = new Aluno();
    $data = $aluno->delete($p);
    if($data == true)
    {
      header('Location: ' . BASE_URL . 'aluno/index');
    }

  }

}
