<?php

class Database {

  private $pdo = null;

  private $database = [
    'host' => 'localhost:33067',
    'dbname' => 'bt_sv',
    'charset' => 'utf8',
    'username' => 'drupal',
    'password' => '123456',
  ];

  function __construct(){
    try {
      $dsn = 'mysql:host=' . $this->database['host'] . ';dbname=' . $this->database['dbname'] . ';charset=' . $this->database['charset'];
      $this->pdo = new PDO($dsn, $this->database['username'], $this->database['password'], [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES => false,
        ]
      );
    } catch (PDOException $e) { die($e->getMessage()); }
  }

  function __destruct(){
    if ($this->pdo!==null) { $this->pdo = null; }
  }

  public function connect() {
    return $this->pdo;
  }

}