<?php
  include 'class-autoload.inc.php';

  $dai = $_POST["dai"];
  $rong = $_POST["rong"];

  $hcn = new HinhChuNhat((int)$dai, (int)$rong);

  try {
    echo $hcn->square();
  } catch (TypeError $e) {
    echo "Error!: " . $e->getMessage();
  }
?>