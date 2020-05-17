<?php

include './autoload.php';

if (isset($_POST['action'])) {
  $action = $_POST['action'];
  
  switch ($action) {
    case 'save':
      $ma_lop = $_POST['maLop'];
      $ten = $_POST['tenLop'];
      $ma_khoa = $_POST['maKhoa'];
      //print_r($_POST); exit;
  
      $lop = new Lop($ma_lop, $ten, $ma_khoa);
     // var_dump($lop);exit;
      $lop->save();
  
      $url = 'lop.php';
      header('Location: ' .$url);
      break;
    case 'delete':
      $ma_lop = $_POST['maLop'];
      $repo = new LopRepo();
      $repo->delete($ma_lop);
      $url = 'lop.php';
      header('Location: ' .$url);
      break;
    default:
      echo "Error!";
      break;
  }
}

function danh_sach_lop() {
  $tieu_de = [
    'Mã Lop',
    'Tên',
    'Khoa',
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
  $repo = new LopRepo();
  $danh_sach_lop = $repo->getAll();
  // print_r($danh_sach_khoa); exit;
  foreach ($danh_sach_lop as $lop) {
    $trow = '<tr>';
    $trow .= '<td>' . $lop['MaLop'] . '</td>';
    $trow .= '<td>' . $lop['TenLop'] . '</td>';
    $trow .= '<td>' . getTenKhoa($lop['MaKhoa']) . '</td>';
    $trow .= '<td><div class="btn-group mr-2">';
    $trow .= '<a href="./sua_lop.php?MaLop=' . $lop['MaLop'] .'" class="btn btn-sm btn-outline-secondary">Sửa</a>';
    $trow .= '<a href="./xoa_lop.php?MaLop=' . $lop['MaLop'] .'" class="btn btn-sm btn-outline-secondary">Xoá</a>';
    $trow .= '</div></td>';
    $trow .= '</tr>';
    $tbody .= $trow;
  }
  $tbody .= '</tbody>';
  $table = '<table class="table table-striped table-sm">' . $thead . $tbody . '</table>';
  return $table;
}

function danh_sach_khoa($default=null) {
  $repo = new KhoaRepo();
  $danh_sach_khoa = $repo->getAll();
  $select = '<select class="form-control" id="maKhoa" name="maKhoa">';
  $option ='';
  foreach ($danh_sach_khoa as $khoa) {
    if(isset($default)&&$default==$khoa['MaKhoa']){
      $option .= '<option selected value="' . $khoa['MaKhoa'] .'">' .$khoa['TenKhoa'] .'</option>';
    }
    $option .= '<option value="' . $khoa['MaKhoa'] .'">' .$khoa['TenKhoa'] .'</option>';
  }
  $select .= $option;
  $select .= '</select>';
  return $select;
}

function getTenKhoa($ma_khoa){
  $ten_khoa = '';
  $repo = new KhoaRepo();
  $khoa = $repo->get($ma_khoa);
  $ten_khoa = $khoa['TenKhoa'];
  return $ten_khoa;
}
?>