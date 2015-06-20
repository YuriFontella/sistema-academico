<?php

/**
 * Description of ProfessorController
 *
 * @author Luis Augusto Silva - luis.bc@hotmail.com
 */
class ProfessorController extends Controller {
    
    public $view;

    public function matricula() {
        $this->view = 'professor' . DS . 'form.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $a = new Aluno();
            $a->setNome($_POST['nome']);
            $a->setEmail($_POST['email']);

            if ($a->create()) {
                header('location:' . BASE_URL);
            } else {
                //echo "<script>alert('Erro')</script>";
                header('location:' . BASE_URL);
            }
        }
    }
    

}