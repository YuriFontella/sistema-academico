<?php

class AlunoController {

	private $view;

	public function index() {
		var_dump('oi');
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

	/**
	 * @return mixed
	 */
	public function getView() {
		return $this->view;
	}


}

