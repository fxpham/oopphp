<?php

require_once './classes/SoPhuc.php';

$phuc1_thuc = $_POST['phuc1_thuc'];
$phuc1_ao = $_POST['phuc1_ao'];
$phuc2_thuc = $_POST['phuc2_thuc'];
$phuc2_ao = $_POST['phuc2_ao'];

$phep_toan = $_POST['phep_toan'];

$phuc1 = new SoPhuc($phuc1_thuc, $phuc1_ao);
$phuc2 = new SoPhuc($phuc2_thuc, $phuc2_ao);

try {
  switch ($phep_toan) {
    case 'cong':
      /** @var SoPhuc $tong */
      $tong = $phuc1->cong($phuc2);
      $tong->xuat();
      break;
    case 'nhan':
      /** @var SoPhuc $tich */
      $tich = $phuc1->nhan($phuc2);
      $tich->xuat();
      break;
    default:
      echo 'Error!';
      break;
  }
} catch (TypeError $e) {
  echo "Error!: " . $e->getMessage();
}

?>