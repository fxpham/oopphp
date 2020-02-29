<?php
include_once 'includes/autoload.php';
$dbh = new Dbh('localhost:33067', 'drupal', '123456', 'oop', 'utf8');
$pdo = $dbh->connect();

$table = "hoc_sinh";
$sql ="CREATE TABLE $table(
  ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
  ho VARCHAR( 50 ) NULL,
  ten VARCHAR( 250 ) NOT NULL,
  tuoi INT( 3 ) NOT NULL,
  que_quan VARCHAR( 150 ) NULL);" ;

$pdo->exec($sql);
print("Da tao bang $table.\n");