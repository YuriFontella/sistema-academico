<?php

/* Atom aqruivo modificado git integration para não ficar mais laranja */

require_once 'config' . DIRECTORY_SEPARATOR . 'config.php';

$url = substr($_SERVER['REQUEST_URI'], 1);
list($c, $m, $p) = explode('/', $url);
$c = ucfirst($c) . 'Controller';
if($m == null)
{
	$c = 'HomeController';
	$m = 'index';
}

/*

$c = (isset($_REQUEST['c'])) ? $_REQUEST['c'] : 'HomeController';
$m = (isset($_REQUEST['m'])) ? $_REQUEST['m'] : 'index';
$p = (isset($_REQUEST['p'])) ? $_REQUEST['p'] : '';

*/

$controller = new $c;

if (!is_array($p)) {
	if ($p != null && strlen($p) > 0) {
		$p = [$p];
	} else {
		$p = [];
	}
}

$content = call_user_func_array(array($controller, $m), $p);

include_once APP . DS . 'web' . DS . 'index.php';

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
