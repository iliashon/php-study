<?php 

const USER = 'root';
const PASS = 'root';
const HOST = 'localhost';
const DB_NAME = 'first-site-php';
const PORT = 3306;

class DB {
  private static $_db = null;

  public static function getInstanse() {
    if(self::$_db == null) {
      self::$_db = new PDO('mysql:host=' . HOST . ';dbname=' . DB_NAME . ';port=' . PORT, USER, PASS);
    }

    return self::$_db;
  }

  private function __construct(){}
  private function __clone(){}
  private function __wakeup(){}
}