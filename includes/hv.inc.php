<?php
  include 'class-autoload.inc.php';

  $canh = $_POST["canh"];

  $hv = new HinhVuong((int)$canh);

  try {
    echo $hv->square();
  } catch (TypeError $e) {
    echo "Error!: " . $e->getMessage();
  }
?>