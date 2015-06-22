<?php

/**
 * Description of CursoController
 *
 * @author luisaugustosilva
 */
class CursoController extends Controller {
    
    public function cadastrar() {
        $this->view = 'form';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $a = new Curso();
            $a->setNome($_POST['nome']);
            $a->setC($_POST['carga_horaria']);

            if ($a->create()) {
                header('location:' . BASE_URL);
            } else {
                //echo "<script>alert('Erro')</script>";
                header('location:' . BASE_URL);
            }
        }
    }
}
