<?php
class Database {
 
        public $host = 'localhost';
        public $dbname = 'taawon';
        public $user = 'root';
        public $pass = '';
        public $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        public $pdo;
        public function __construct(){
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass,$this->options);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
 
}
public function __destruct()
{
  App::$app->db->pdo = null;
}
}