<?php
include_once 'includes/autoload.php';
$dbh = new Dbh('localhost:33067', 'drupal', '123456', 'oop', 'utf8');

function getHocSinhs($dbh) {
  $table = "hoc_sinh";
  $sql ="SELECT * FROM $table" ;

  $pdo = $dbh->connect();
  $stmt = $pdo->query($sql);

  while($row = $stmt->fetch()) {
    echo $row['ten'] . '<br>';
  }
}

function addHocSinh($dbh) {
  $table = "hoc_sinh";
  $sql = "INSERT INTO $table (ho, ten, tuoi, que_quan) VALUES ('Nguyen', 'A', 21, 'Ho Chi Minh')";

  $pdo = $dbh->connect();
  $pdo->exec($sql);
  echo "Da them hoc sinh";
}

getHocSinhs($dbh);