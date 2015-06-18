<?php
    define('ROOT', dirname( __FILE__));
    define('DS', DIRECTORY_SEPARATOR); // DIRECTORY_SEPARATOR contem a barra de endereço para o definido OS que estiver rodando NAO TIRA ISSO!!
    
    require_once ROOT . DS . 'lib' . DS . 'functions.php';  // DS = "/"
    
    
  
$c = (isset($_REQUEST['c'])) ? $_REQUEST['c'] : 'Home' ;
$m = (isset($_REQUEST['m'])) ? $_REQUEST['m'] : 'index' ;
$p = (isset($_REQUEST['p'])) ? $_REQUEST['p'] : '' ;

$a = new Aluno();
echo '<pre>';

$a->setNome('Luis');
$a->setCpf('23123123123123');
$a->setEmail('we@qwe.dom');
$a->setFone('0');
//$a->create();


print_r($a);