<?php

class Users extends Db {
  public function __construct() {
    $sql = "SELECT * FROM users";
    $stmt = $this->connect()->query($sql);
    $stmt = $stmt->fetch();

    print_r($stmt);
  }
}