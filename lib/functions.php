<?php

function __autoload($class_name) {

  if (file_exists(ROOT . DS . 'app' . DS . 'controller' . DS . $class_name . '.php') ) {
    require_once ROOT . DS . 'app' . DS . 'controller' . DS . $class_name . '.php';
    return true;
  }
  if (file_exists(ROOT . DS . 'app' . DS . 'model' . DS . $class_name . '.php') ) {
    require_once ROOT . DS . 'app' . DS . 'model' . DS . $class_name . '.php';
    return true;
  }
  if (file_exists(ROOT . DS . 'lib' . DS . $class_name . '.php') ) {
    require_once ROOT . DS . 'lib' . DS . $class_name . '.php';
    return true;
  }
  return false;
}
