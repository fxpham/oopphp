<!DOCTYPE html>

<html>
<body>

<?php
//Tạo 1 bảng table 

echo "<table style='border: solid 1px black;'>";
//render header của bảng
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Regiter date</th></tr>";

//Render ra 1 table
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost:3306";
$username = "nguyenhong";
$password = "123456";
$dbname = "db1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM user";//chọn all dữ liệu từ bảng user
    $stmt = $conn->prepare($sql);//PDO chuẩn bị 1 câu truy vấn, 
    $stmt->execute(); //thực thi câu lệnh sql

    // Kết quả trả về dạng mảng lồng nhau (Fetch_ASSOC)
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    // $data = $stmt->fetchAll();
    // print_r($data);//
    // exit;

    //Render dữ liệu ra HTML 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>

</body>
</html>