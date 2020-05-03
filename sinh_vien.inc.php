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
  
      $sinhvien = new SinhVien($ma_sv,$ho_sv, $ten_sv, $ngay_sinh,$gioi_tinh,$dien_thoai,$dia_chi,$ma_lop);
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
    $trow .= '<td>' . $sinhvien['MaLop'] . '</td>';
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
?>