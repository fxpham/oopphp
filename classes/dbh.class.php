<?php

class Dbh {

  private $dbHost;
  private $userName;
  private $passWord;
  private $dbName;
  private $charset;

  public function __construct(string $db_host, string $user_name, string $pwd, string $db_name, $charset = '') {
    $this->dbHost = $db_host;
    $this->userName = $user_name;
    $this->passWord = $pwd;
    $this->dbName = $db_name;
    $this->charset = $charset;
  }

  public function connect() {
    try {
      $dsn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName . ';charset=' . $this->charset;
      $pdo = new PDO($dsn, $this->userName, $this->passWord);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo 'Success';
      return $pdo;
    } catch (PDOException $e) {
      echo 'Connection failed: ' . $e->getMessage();
    }
  }
}