<?php
  $masv = $_POST['masv'];
  $tensv = $_POST['tensv'];
  
  $servername = "localhost:3306";
  $username = "nguyenhong";
  $password = "123456";
  $dbname = "bt9";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE sinh_vien  SET ten ='$tensv' WHERE ma_sv = '$masv'";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Da sửa sinh vien trong bảng bt9 ";
  }
  catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
?>