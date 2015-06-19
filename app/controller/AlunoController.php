<?php

class AlunoController {

	private $view;

	public function index() {
		var_dump('oi');
	}

	public function retrieve($a = null, $b = null) {
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

