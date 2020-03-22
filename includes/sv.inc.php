<?php
  $masv = $_POST['masv'];
    
  $servername = "localhost:3306";
  $username = "nguyenhong";
  $password = "123456";
  $dbname = "bt9";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //DELETE FROM table_name WHERE condition;
    $sql = "DELETE FROM sinh_vien WHERE ma_sv='$masv'";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "sv chọn đã được xóa trong bảng bt9 ";
  }
  catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
?>