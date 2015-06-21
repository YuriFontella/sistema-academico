<?php

/**
 *  Chega de replicar declarações e funcs DRY
 */

class Application
{

  public $view;

  function __construct()
  {
    # code...
  }

  public function getView()
  {
		return $this->view;
	}

  public function getClass()
  {
    $nameClass = get_class($this);
    return $nameClass;
  }

  public function getContent()
  {

    include_once(VIEW . DS . strtolower(reset(explode('Controller', $this->getClass()))) . DS . $this->view . '.php');

    return false;
  }

}
