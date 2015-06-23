<?php

/* Atom aqruivo modificado git integration para não ficar mais laranja */
/* Testando o merge com dois branch */

require_once 'config' . DIRECTORY_SEPARATOR . 'config.php';

$path = strlen($_SERVER["DOCUMENT_ROOT"]) -1;
$exclude = substr( $_SERVER["SCRIPT_FILENAME"], $path, -10);

$url = substr($_SERVER['REQUEST_URI'], strlen($exclude)); // Url de produção /site/controller/method/parameter
list($c, $m, $p) = explode('/', $url);

$c = ucfirst($c) . 'Controller';
if ($m == null)
{
  $c = ($c != 'Controller' ? $c : 'HomeController');
  $m = 'index';
}

/*

if (strpos($url, 'ifc/_sistema-academico') != 0) {
    $value = explode('/', $url);
    $c = (isset($value[0]) ? $value[0] : ''); // Controller
    $m = (isset($value[1]) ? $value[1] : ''); // Metodo
    if (count($value) > 2) {
        $p = array_slice($value, 2); // Parametro
    } else {
        $p = array();
    }
} else {
    $value = explode('/', $url);
    $c = (isset($value[2]) ? $value[2] : '');
    $m = (isset($value[3]) ? $value[3] : '');
    if (count($value) > 4) {
        $p = array_slice($value, 4); // Parametro
    } else {
        $p = array();
    }
}

*/

$controller = new $c;
//var_dump($c);
if (!is_array($p)) {
    if ($p != null && strlen($p) > 0) {
        $p = [$p];
    } else {
        $p = [];
    }
}


$content = call_user_func_array(array($controller, $m), $p);

include_once APP . DS . 'web' . DS . 'index.php';
