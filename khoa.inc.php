<?php

include './autoload.php';

$ma_khoa = $_POST['maKhoa'];
$ten = $_POST['tenKhoa'];
$nganh = $_POST['nganh'];

$type = $_POST['loai_du_lieu'];

switch ($type) {
  case 'khoa':
    $khoa = new Khoa($maKhoa, $ten, $nganh);
    $khoa->save();
    $url = 'khoa.php';
    header('Location: ' .$url);
    break;

    default:
    echo "Error!";
    break;
}

function danh_sach_khoa() {
  $tieu_de = [
    'Mã Khoa',
    'Tên',
    'Ngành',
  ];
  $table = '<table class="table table-striped table-sm">';
  $thead = '<thead><tr>';
  foreach ($tieu_de as $th) {
    $thead .= "<th>$th</th>";
  }
  $thead .= '</tr></thead>';

  $tbody = '<tbody>';
  $repo = new KhoaRepo();
  $danh_sach_khoa = $repo->getAll();
  // print_r($danh_sach_khoa); exit;
  foreach ($danh_sach_khoa as $khoa) {
    $trow = '<tr>';
    $trow .= '<td>' . $khoa['MaKhoa'] . '</td>';
    $trow .= '<td>' . $khoa['TenKhoa'] . '</td>';
    $trow .= '<td>' . $khoa['Nganh'] . '</td>';
    $trow .= '</tr>';
    $tbody .= $trow;
  }
  $tbody .= '</tbody>';
  $table = '<table class="table table-striped table-sm">' . $thead . $tbody . '</table>';
  return $table;
}
?>