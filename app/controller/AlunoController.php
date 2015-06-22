<?php

class AlunoController extends Controller {

    public function retrieve() {
        $this->view = 'retrieve';
        $aluno = new Aluno();
        $alunos = $aluno->retrieve();
        $this->alunos = $alunos;
    }

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
                header('location:' . BASE_URL . 'aluno/retrieve');
            } else {
                echo "<script>alert('Erro')</script>";
                //header('location:' . BASE_URL);
            }
        }
    }

}
