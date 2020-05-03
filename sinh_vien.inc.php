<?php

include './autoload.php';

if (isset($_POST['action'])) {
  $action = $_POST['action'];
  
  switch ($action) {
    case 'save':
      $ma_sv = $_POST['MaSV'];
      $ten_sv = $_POST['TenSV'];
      $ngay_sinh = $_POST['NgaySinh'];
	  $gioi_tinh = $_POST['GioiTinh'];
      $dia_chi = $_POST['DiaChi'];
  
      $sinhvien = new SinhVien($ma_sv, $ten_sv, $ngay_sinh,$gioi_tinh,$dia_chi);
      $sinhvien->save();
  
      $url = 'sinhvien.php';
      header('Location: ' .$url);
      break;
    case 'delete':
      $ma_sv = $_POST['MaSV'];
      $repo = new SinhVienRepo();
      $repo->delete($ma_sv);
      $url = 'sinhvien.php';
      header('Location: ' .$url);
      break;
    default:
      echo "Error!";
      break;
  }
}

function danh_sach_sv() {
  $tieu_de = [
    'Mã sinh viên',
    'Tên sinh viên',
    'Ngày sinh',
	'Giới tính',
	'Địa chỉ',
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
  // print_r($danh_sach_khoa); exit;
  foreach ($danh_sach_sv as $sinhvien) {
    $trow = '<tr>';
    $trow .= '<td>' . $sinhvien['MaSV'] . '</td>';
    $trow .= '<td>' . $sinhvien['TenSV'] . '</td>';
	$trow .= '<td>' . $sinhvien['NgaySinh'] . '</td>';
	$trow .= '<td>' . $sinhvien['GioiTinh'] . '</td>';
	$trow .= '<td>' . $sinhvien['DiaChi'] . '</td>';
    $trow .= '<td><div class="btn-group mr-2">';
    $trow .= '<a href="./sua_sinh_vien.php?MaSV=' . $sinhvien['MaSV'] .'" class="btn btn-sm btn-outline-secondary">Sửa</a>';
    $trow .= '<a href="./xoa_sinh_vien.php?MaSV=' . $sinhvien['MaSV'] .'" class="btn btn-sm btn-outline-secondary">Xoá</a>';
    $trow .= '</div></td>';
    $trow .= '</tr>';
    $tbody .= $trow;
  }
  $tbody .= '</tbody>';
  $table = '<table class="table table-striped table-sm">' . $thead . $tbody . '</table>';
  return $table;
}
?>