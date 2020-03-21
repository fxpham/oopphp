<?php
$servername = "localhost:33067";
$username = "nguyenhong";
$password = "123456";
$dbname = "bt9"; //chọn csdl để thêm vào

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql="SELECT * FROM sinh_vien";//chọn bảng sinh_viên để thêm vào
  $stmt = $conn->prepare($sql);//PDO chuẩn bị 1 câu truy vấn,
  $stmt->execute(); //thực thi câu lệnh sql

  // Kết quả trả về dạng mảng lồng nhau (Fetch_ASSOC)
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  
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
