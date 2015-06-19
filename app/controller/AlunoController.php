<?php

class AlunoController {

    public function index() {
        var_dump('oi');
    }
    
    public function retrieve($a = null, $b = null) {
        var_dump('aqui retornarei todos os alunos');
        $aluno = new Aluno();
        $alunos = $aluno->retrieve();
        var_dump($b, $a);
        echo "<pre>";
        var_dump($alunos);
        
    }
}

