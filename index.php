<?php
//khai bao thong tin ket noi
$servername = "localhost:3306"; //localhost: ten miền server; 3306: la port mysql, xem tren xamp
$username = "nguyenhong"; //thông tin tài khoản của mysql (mỗi ng phải tự tạo), ko được trùng
$password = "123456"; //thông tin tài khoản
$dbname = "db1"; // tên csdl để tạo mới

try {
    $conn = new PDO("mysql:host=$servername",$username,$password);
    //thiết lập các Attribute của PDO, nếu kết nối được thì echo Thành Công
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE $dbname";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>