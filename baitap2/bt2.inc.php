<?php

require_once './classes/HocSinh.php';

$hoten = $_POST['hoten'];
$tuoi = $_POST['tuoi'];
$quequan = $_POST['quequan'];

$hocsinh = new HocSinh($hoten, $tuoi, $quequan);
$hocsinh->xuat();

?>