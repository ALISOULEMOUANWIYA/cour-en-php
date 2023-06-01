<?php
  class Database{
      private $host = "localhost";
      private $user = "root";
      private $pass = "";
      private $dbname = "crud_mvc_poo";

      private $DBB;

      public function __construct(){
          $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8';
          $option = array(
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
          );
          try {
              $this->DBB = new PDO($dsn,$this->user, $this->pass, $option);
          } catch (PDOException $ex) {
              echo $ex->getMessage();
          } 
      }
      function getDBB(){
          return($this->DBB);
      }
    }
?>