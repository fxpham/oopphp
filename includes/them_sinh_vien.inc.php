<?php

include '../autoload/autoload.php';

// $msv = $_POST['msv'];
$ho = $_POST['ho'];
$ten = $_POST['ten'];
$gioi_tinh = $_POST['gioi_tinh'];
$ngay_sinh = $_POST['ngay_sinh'];
$cmnd = $_POST['cmnd'];
$sdt = $_POST['sdt'];
$dia_chi = $_POST['dia_chi'];

$loai_du_lieu = $_POST['loai_du_lieu'];

switch ($loai_du_lieu) {
  case 'sinh_vien':
    $sinh_vien = new SinhVien($msv, $ho, $ten, $ngay_sinh, $gioi_tinh, $dia_chi, $sdt, $cmnd);
    echo $sinh_vien->getMaSinhVien();
    break;

    default:
    echo "Error!";
    break;
}

?>