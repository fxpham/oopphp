<?php

require_once './classes/TaiLieu.php';
require_once './classes/Sach.php';
require_once './classes/Bao.php';
require_once './classes/TapChi.php';

$ma_tai_lieu = $_POST['ma_tai_lieu'];
$nha_xuat_ban = $_POST['nha_xuat_ban'];
$so_luong = $_POST['so_luong'];
$loai_tai_lieu = $_POST['loai_tai_lieu'];

$tai_lieu = [];
switch ($loai_tai_lieu) {
  case 'sach':
    $tac_gia = $_POST['tac_gia'];
    $so_trang = $_POST['so_trang'];
    $sach = new Sach($ma_tai_lieu, $nha_xuat_ban, (int)$so_luong, $tac_gia, (int)$so_trang);
    $tai_lieu[] = $sach;
    break;
  case 'bao':
    $ngay_phat_hanh = $_POST['ngay_phat_hanh'];
    $bao = new Bao($ma_tai_lieu, $nha_xuat_ban, $so_luong, strtotime($ngay_phat_hanh));
    $tai_lieu[] = $bao;
    break;
  case 'tap_chi':
    $thang_phat_hanh = $_POST['thang_phat_hanh'];
    $so_phat_hanh = $_POST['so_phat_hanh'];
    $tap_chi = new TapChi($ma_tai_lieu, $nha_xuat_ban, $so_luong, $so_phat_hanh, $thang_phat_hanh);
    $tai_lieu[] = $tap_chi;
    break;

  default:
    echo "Error!";
    break;
}

//Duyệt biến tai_lieu này ứng với mỗi phần tử trong biến tai_lieu = biến tl
//VD : biến tai_lieu (sach, bao, tap chi), vòng lặp sẽ chạy từ tl=sach, tl=bao, tl=tapchi
foreach ($tai_lieu as $tl) {
  echo $tl->getMaTaiLieu();
}

?>