<?php

$protocol = "http" .((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "s" : "") . "://";
$server   = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
$basename = preg_replace('@/+$@','',dirname($_SERVER['SCRIPT_NAME'])).'/';

define('DS', DIRECTORY_SEPARATOR); // DIRECTORY_SEPARATOR contem a barra de endereço para o definido OS que estiver rodando NAO TIRA ISSO!!
define('ROOT', dirname(dirname(__FILE__)));
define('BASE_URL', $protocol . $server . $basename);
define('APP', ROOT . DS . 'app');
define('VIEW', APP . DS . 'view');

require_once ROOT . DS . 'config' . DS . 'database.php'; // acesso as constantes do banco..
require_once ROOT . DS . 'lib' . DS . 'functions.php';  // DS = "/"