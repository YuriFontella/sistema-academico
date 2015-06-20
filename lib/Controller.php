<?php

/**
 * Description of Controller
 *
 * @author Luis Augusto Silva - luis.bc@hotmail.com
 */
class Controller {
    
    public function getModelName() {
    $controller =  strtolower((get_class($this))); // buscar o nome do controller
    $ModelName = str_replace("controller","",$controller);
    $ModelName = ucfirst($ModelName);
    return $ModelName;
        
    }
    public function getViewFolder() {
    $controller =  strtolower((get_class($this))); // buscar o nome do controller
    $controller = str_replace("controller","",$controller);    
    return $controller;
    }

    public function index() {
        return $this->retrieve();
    }
    
    public function retrieve() {
        $modelname = $this->getModelName();
        $this->view = $this->getViewFolder() . DS . 'retrieve.php';
        $model = new $modelname();
        $models = $model->retrieve();
        $this->models = $models;
    }
    
    /**
     * @return mixed
     */
    public function getView() {
        return $this->view;
    }
}
