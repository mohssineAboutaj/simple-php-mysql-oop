<?php

class Db {
  private $host = "localhost";
  private $user = "root";
  private $pass = "";
  private $dbName = "database";
  private $options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
  );
  
  protected function connect() {
    $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName;
    $con = new PDO($dsn, $this->user, $this->pass, $this->options);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $con;
  }
}