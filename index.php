<?php
$servername = "localhost:1080";
$username = "root";
$password = "password";

try {
    $conn = new PDO("mysql:host=$servername;dbname=c5_bt1_user","root","");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công";
    }
catch(PDOException $e)
    {
    echo "Kết nối thất bại " . $e->getMessage();
    }
?>

