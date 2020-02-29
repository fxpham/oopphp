<?php

require_once './classes/CanBo.class.php';
require_once './classes/NhanVien.class.php';
require_once './classes/KySu.class.php';
require_once './classes/CongNhan.class.php';

$hoten = $_POST['hoten'];
$tuoi = $_POST['tuoi'];
$gioitinh = $_POST['gioitinh'];
$diachi = $_POST['diachi'];
$loaicanbo = $_POST['loaicanbo'];

$can_bo=[];
switch ($loaicanbo) {
  case 'nhanvien':
    $congviec = $_POST['congviec'];
    $nhanvien = new NhanVien($hoten, (int)$tuoi, $gioitinh, $diachi, $congviec);
    $can_bo[] = $nhanvien;
    break;

	case 'kysu':
    $nganhdaotao = $_POST['nganhdaotao'];
    $kysu = new KySu($hoten, (int)$tuoi, $gioitinh, $diachi, $nganhdaotao);
    $can_bo[] = $kysu;
    break;

	case 'congnhan':
    $bac = $_POST['bac'];
    $congnhan = new CongNhan($hoten, (int)$tuoi, $gioitinh, $diachi, $bac);
    $can_bo[] = $congnhan;
    break;

    default:
    echo "Error!";
    break;
}

foreach ($can_bo as $cb) {
  echo $cb->gethoTen();
}

?>