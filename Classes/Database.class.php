<?php

class Database {

  private $dbHost = 'localhost:33067';
  private $userName = 'drupal';
  private $passWord = '123456';
  private $dbName = 'qlsv';
  private $charset = 'utf8';

  public function connect() {
    try {
      $dsn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName . ';charset=' . $this->charset;
      $pdo = new PDO($dsn, $this->userName, $this->passWord);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } catch (PDOException $e) {
      echo 'Connection failed: ' . $e->getMessage();
    }
  }
}