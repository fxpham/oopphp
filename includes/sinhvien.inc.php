<?php
  $masv = $_POST['masv'];
  $tensv = $_POST['tensv'];
  $dob = strtotime($_POST['ngay_sinh']);
  $gioi_tinh = $_POST['gioi_tinh'];
  $gioi_tinh = $gioi_tinh === 'nam' ? 1 : 0;
  $quequan = $_POST['quequan'];
  $namhoc = $_POST['namhoc'];
  $lophoc = $_POST['lophoc'];

  $servername = "localhost:33067";
  $username = "drupal";
  $password = "123456";
  $dbname = "bt9";

  /**
   * Kiem tra sinh vien da ton tai.
   *
   * @param string $masv
   *   Ma sinh vien can kiem tra
   *
   * @return boolean
   *   TRUE neu da ton tai ma sinh vien.
   *   Otherwise FALSE.
   */
  function is_exist_masv($masv) {
    $record = get_sinh_vien_by_masv($masv);
    return !empty($record);
  }

  /**
   * Get sinh vien bang ma sinh vien.
   *
   * @param string $masv
   *   Ma sinh vien de load sinh vien tu db
   * @return array|boolean
   *   Danh sach ket qua.
   *   False neu khong tim thay.
   */
  function get_sinh_vien_by_masv($masv) {
    try {
      // Pham vi truy xuat bien la noi bo ham
      // Nen khong the dung cac bien chua thong tin ket noi db toan cuc o day.
      $conn = new PDO('mysql:host=localhost:33067;dbname=bt9;charset=utf8', 'nguyenhong', '123456');
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT ma_sv FROM sinh_vien WHERE ma_sv = '$masv'";
      $a = $conn->query($sql)->fetch();
      return $conn->query($sql)->fetch();
    }
    catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
  }

  // Them sinh vien.

  if (is_exist_masv($masv)){
    echo "Mã sinh viên này có rồi, vui lòng nhập mã khác";
  }
  else {
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO sinh_vien (ma_sv,ten, ngay_sinh, gioi_tinh, que_quan, nam_hoc, lop)
      VALUES ('$masv','$tensv', $dob, $gioi_tinh, '$quequan', '$namhoc', '$lophoc')";
      // use exec() because no results are returned
      $conn->exec($sql);
      echo "Da them sinh vien.";
    }
    catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
  }
?>