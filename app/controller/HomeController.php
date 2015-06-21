<?php
/**
 * Description of Home
 *
 * @author Luis Augusto Silva - luis.bc@hotmail.com
 */
class HomeController extends Controller {

	public function index() {
            $this->view = 'painel';
            return $this->view;
	}

}
