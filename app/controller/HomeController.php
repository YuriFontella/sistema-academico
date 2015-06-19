<?php
/**
 * Description of Home
 *
 * @author Luis Augusto Silva - luis.bc@hotmail.com
 */
class HomeController {

	private $view;
        
	public function index() {
            $this->view = 'home' . DS . 'painel.php';
            return $this->view;
	}
        
        public function getView() {
            return $this->view;
	}

}
