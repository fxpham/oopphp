<?php
  $masv = $_POST['masv'];
  $tensv = $_POST['tensv'];
  $dob = strtotime($_POST['ngay_sinh']);
  $gioi_tinh = $_POST['gioi_tinh'];
  $gioi_tinh = $gioi_tinh === 'nam' ? 1 : 0;
  $quequan = $_POST['quequan'];
  $namhoc = $_POST['namhoc'];
  $lophoc = $_POST['lophoc'];

  $servername = "localhost:3306";
  $username = "nguyenhong";
  $password = "123456";
  $dbname = "bt9";

  function get_sinh_vien($ma_sv)
  {
    query: SELECT MaSV FROM sinh_vien WHERE MaSV = $masv ;
    if (empty(get_sinh_vien($masv)) { "Ma sinh vien nay chua co"; 
          try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "INSERT INTO sinh_vien (MaSV,ten, ngay_sinh, gioi_tinh, que_quan, nam_hoc, lop)
          VALUES ('$masv','$tensv', $dob, $gioi_tinh, '$quequan', '$namhoc', '$lophoc')";
          // use exec() because no results are returned
          $conn->exec($sql);
          echo "Da them sinh vien.";
        }
        catch(PDOException $e) {
          echo $sql . "<br>" . $e->getMessage();
        }
    } else { 
      echo "Mã sinh viên này có rồi, vui lòng nhập mã khác"; 
    }
    }
?>