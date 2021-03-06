<?php

/**
 * Description of Controller
 *
 * @author Luis Augusto Silva - luis.bc@hotmail.com
 */
class Controller {

    public $view;

    public function getView() {
        return $this->view;
    }

    public function getClass() {
        $nameClass = get_class($this);
        return $nameClass;
    }

    public function getContent() {
        $page = VIEW . DS . $this->getViewFolder() . DS . $this->view . '.php';
        return $page;
    }

    public function getModelName() {
        $controller = strtolower((get_class($this))); // buscar o nome do controller
        $ModelName = str_replace("controller", "", $controller);
        $ModelName = ucfirst($ModelName);
        return $ModelName;
    }
    
    /*
     * @return Nome da pasta que esta as views da classe usada.
     */
    
    public function getViewFolder() { 
        $controller = strtolower((get_class($this))); // buscar o nome do controller
        $controller = str_replace("controller", "", $controller);
        return $controller;
    }

    public function index() {
        return $this->retrieve();
    }

    public function retrieve() {
        $modelname = $this->getModelName();
        $this->view = 'retrieve';
        $model = new $modelname();
        $models = $model->retrieve();
        $this->models = $models;
    }

}
