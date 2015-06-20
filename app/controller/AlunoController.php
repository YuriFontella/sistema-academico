<?php

class AlunoController {

    private $view;

    public function index() {
        var_dump('eu sou o index');
    }

    public function retrieve() {
        $this->view = 'aluno' . DS . 'retrieve.php';
        $aluno = new Aluno();
        $alunos = $aluno->retrieve();
        $this->alunos = $alunos;
    }

    public function porCurso() {
        $this->view = 'aluno' . DS . 'retrieve.php';
        $aluno = new Aluno();
        $alunos = $aluno->retrieve();
        $this->alunos = $alunos;
    }

    public function matricula() {
        $this->view = 'aluno' . DS . 'matricula.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $a = new Aluno();
            $a->setNome($_POST['nome']);
            $a->setCpf($_POST['cpf']);
            $a->setEmail($_POST['email']);
            $a->setFone($_POST['fone']);
            $a->setDatanasc($_POST['data_nascimento']);

            if ($a->create()) {
                header('location:' . BASE_URL);
            } else {
                //echo "<script>alert('Erro')</script>";
                header('location:' . BASE_URL);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getView() {
        return $this->view;
    }

}
