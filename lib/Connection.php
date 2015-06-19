<?php

require_once ROOT . DS . 'config' . DS . 'database.php';


class Connection {
    
    public $host;
    public $db_name;
    public $password;
    public $user;

    private static $instance;

    public function __construct($host = null, $db_name = null, $password = null, $user = null) {

        $this->host = defined('HOSTNAME') ? HOSTNAME : $this->host;
        $this->db_name = defined('DB_NAME') ? DB_NAME : $this->db_name;
        $this->password = defined('DB_PASSWORD') ? DB_PASSWORD : $this->password;
        $this->user = defined('DB_USER') ? DB_USER : $this->user;
    }

    public static function getInstance() {

        $pdo = "mysql:host={$this->host};";
        $pdo .= "dbname={$this->db_name};";

        if (!isset(self::$instance)) {
            self::$instance = new PDO($pdo, $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }

        return self::$instance;
    }

}
