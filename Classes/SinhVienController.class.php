<?php

class SinhVienController extends Database {

  public function fetchAll() {
    $stmt = $this->connect()->query("SELECT * FROM sinh_vien");
    while ($row = $stmt->fetch()) {
      $svid = $row['svid'];
      echo $svid;
      return $svid;
    }
  }
}