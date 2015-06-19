<?php

require_once 'config/config.php';    
  
$c = (isset($_REQUEST['c'])) ? $_REQUEST['c'] : 'HomeController' ;
$m = (isset($_REQUEST['m'])) ? $_REQUEST['m'] : 'index' ;
$p = (isset($_REQUEST['p'])) ? $_REQUEST['p'] : '' ;

$controller =  new $c;

if (!is_array($p)){
    if ($p != null && strlen($p) > 0) {
        $p = [$p];
    } else {
         $p = [];
    }
}

call_user_func_array(array($controller, $m), $p);



//$a = new Aluno();
//echo '<pre>';
//
//$a->setNome('Luis');
//$a->setCpf('23123123123123');
//$a->setEmail('we@qwe.dom');
//$a->setFone('0');
//$a->create();
//
//
//print_r($a);