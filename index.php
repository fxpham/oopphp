<?php
//khai bao thong tin ket noi
$servername = "localhost:3306"; //localhost: ten miền server; 3306: la port mysql, xem tren xamp
$username = "nguyenhong"; //thông tin tài khoản của mysql (mỗi ng phải tự tạo), ko được trùng
$password = "123456"; //thông tin tài khoản
$dbname = "mydb"; // tên csdl để kết nối đến

try {
    //tạo 1 đối tượng thuộc class PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    // set the PDO error mode to exception
    //thiết lập các Attribute của PDO, nếu kết nối được thì echo Thành Công
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công";
} catch(PDOException $e) {
    //nếu kết nối thất bại thì in ra 1 thông báo lỗi
    echo "Kết nối thất bại " . $e->getMessage();
}
?>

