<?php

class AlunoController {

    public function index() {
        var_dump('oi');
    }
    
    public function retrieve() {
        var_dump('aqui retornarei todos os alunos');
        $array =  Aluno::retrieve();
        
        echo "<pre>";
        var_dump($array);
        
        
    }
}

