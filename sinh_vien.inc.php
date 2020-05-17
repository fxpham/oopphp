<?php

include './autoload.php';

if (isset($_POST['action'])) {
  $action = $_POST['action'];
  
  switch ($action) {
    case 'save':
      $ma_sv = $_POST['ma_sv'];
      $ho_sv = $_POST['ho_sv'];
      $ten_sv = $_POST['ten_sv'];
      $ngay_sinh = strtotime($_POST['ngay_sinh']);
	    $gioi_tinh = $_POST['gioi_tinh'];
      $dia_chi = $_POST['dia_chi'];
      $dien_thoai = $_POST['dien_thoai'];
      $ma_lop = $_POST['ma_lop'];
      $hinh = xu_ly_uploads_file();
      $sinhvien = new SinhVien($ma_sv,$ho_sv, $ten_sv, $ngay_sinh,$gioi_tinh,$dien_thoai,$dia_chi,$hinh,$ma_lop);
      // print_r($sinhvien);exit;
      $sinhvien->save();
  
      $url = 'sinh_vien.php';
      header('Location: ' .$url);
      break;
    case 'delete':
      $ma_sv = $_POST['ma_sv'];
      $repo = new SinhVienRepo();
      $repo->delete($ma_sv);
      $url = 'sinh_vien.php';
      header('Location: ' .$url);
      break;
    default:
      echo "Error!";
      break;
  }
}

function danh_sach_sinh_vien() {
  $tieu_de = [
    'Mã',
    'Họ',
    'Tên',
    'Ngày sinh',
	  'Giới tính',
    'Địa chỉ',
    'Điện thoại',
    'Lớp',
    'Tác vụ',
  ];
  $table = '<table class="table table-striped table-sm">';
  // Header table.
  $thead = '<thead><tr>';
  foreach ($tieu_de as $th) {
    $thead .= "<th>$th</th>";
  }
  $thead .= '</tr></thead>';
  // END.
  $tbody = '<tbody>';
  $repo = new SinhVienRepo();
  $danh_sach_sv = $repo->getAll();
  foreach ($danh_sach_sv as $sinhvien) {
    $trow = '<tr>';
    $trow .= '<td>' . $sinhvien['MaSV'] . '</td>';
    $trow .= '<td>' . $sinhvien['Ho'] . '</td>';
    $trow .= '<td>' . $sinhvien['TenSV'] . '</td>';
    $trow .= '<td>' . date("d/m/yy",$sinhvien['NgaySinh']) . '</td>';
    $trow .= '<td>' . convertGioiTinh($sinhvien['GioiTinh']) . '</td>';
    $trow .= '<td>' . $sinhvien['DiaChi'] . '</td>';
    $trow .= '<td>' . $sinhvien['DienThoai'] . '</td>';
    $trow .= '<td>' . getTenLop($sinhvien['MaLop']) . '</td>';
    $trow .= '<td><div class="btn-group mr-2">';
    $trow .= '<a href="./sua_sinh_vien.php?ma_sv=' . $sinhvien['MaSV'] .'" class="btn btn-sm btn-outline-secondary">Sửa</a>';
    $trow .= '<a href="./xoa_sinh_vien.php?ma_sv=' . $sinhvien['MaSV'] .'" class="btn btn-sm btn-outline-secondary">Xoá</a>';
    $trow .= '</div></td>';
    $trow .= '</tr>';
    $tbody .= $trow;
  }
  $tbody .= '</tbody>';
  $table = '<table class="table table-striped table-sm">' . $thead . $tbody . '</table>';
  return $table;
}
function convertGioiTinh($value){
  switch ($value) {
    case 0:
      return "Nữ";
      break;
    case 1:
      return "Nam";
      break;  
    
    default:
      return "khác";
      break;
  }

}
function getTenLop($ma_lop){
  $ten_lop ='';
  $repo = new LopRepo();
  $lop = $repo->get($ma_lop);
  $ten_lop = $lop['TenLop'];
    return $ten_lop;
}

function danh_sach_chon_lop($default=null) {
  $repo = new LopRepo();
  $danh_sach_lop = $repo->getAll();
  $select = '<select class="form-control" id="maLop" name="ma_lop">';
  $option ='';
  foreach ($danh_sach_lop as $lop) {
    if(isset($default)&&$default==$lop['MaLop']){
      $option .= '<option selected value="' . $lop['MaLop'] .'">' .$lop['TenLop'] .'</option>';
    }
    $option .= '<option value="' . $lop['MaLop'] .'">' .$lop['TenLop'] .'</option>';
  }
  $select .= $option;
  $select .= '</select>';
  return $select;
}

function xu_ly_uploads_file(){
  // Thư mục chứa file upload.
  $target_dir = "uploads/";
  // print_r($_FILES);
  // Đường dẫn lưu file phía server.
  $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
  $uploadOk = 1;
  // print_r($target_file);
  // Image type : png|jpg|gif
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // print_r(' ----- ');
  // print_r($imageFileType); exit;
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["hinh_anh"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }
  // Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
// Check file size
if ($_FILES["hinh_anh"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    return '';
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
      // echo "The file ". basename( $_FILES["hinh_anh"]["name"]). " has been uploaded.";
      return $target_file;
  } else{
      return '';
  }
}
}

?>