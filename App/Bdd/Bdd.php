<?php

class Bdd {
  private static $_instance = null;
  public $conn = null;

  private function __construct() {
    $this->conn = new PDO('mysql:host=localhost;dbname=kira_spa;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }

  public static function getInstance() {
    if (!static::$_instance) {
      static::$_instance = new Bdd();
    }
    return static::$_instance;
  }
}