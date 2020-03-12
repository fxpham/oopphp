<?php

class SinhVienController extends Database {

  public function fetchAll() {
    $sql = "SELECT * FROM sinh_vien";
    $stmt = $this->connect()->query($sql);
    return $stmt->fetchAll();
  }

  public function fetch($msv) {
    $sql = "SELECT * FROM sinh_vien WHERE svid=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$msv]);
    if ($stmt->rowCount()) {
      return $stmt->fetch();
    }
    return NULL;
  }

  public function addSinhVien($data) {
    // $data = [
    //   'ho' => '',
    //   'ten' => '',
    //   'ngay_sinh' => '',
    //   'gioi_tinh' => '',
    //   'dia_chi' => '',
    //   'dien_thoai' => '',
    //   'cmnd' => ''
    // ];
    try {
      $sql = 'INSERT INTO sinh_vien (';
      $fields = array_keys($data);
      $sql .= implode(', ', $fields);

      $sql .= ') VALUES (';
      $alias = [];
      foreach ($fields as $field) {
        $alias[] = ':' . $field;
      }
      $sql .= implode(', ', $alias);
      $sql .= ')';

      $stmt = $this->connect()->prepare($sql);
      return $stmt->execute($data);
    }
    catch (PDOException $e) {
      echo $sql . '<br>' . $e->getMessage();
    }
  }

  public function deleteSinhVien($msv) {
    $sql = "DELETE FROM sinh_vien WHERE svid=?";
    $stmt = $this->connect()->prepare($sql);
    return $stmt->execute([$msv]);
  }

  public function updateSinhVien($msv, $data) {
    try {
      $sql = 'UPDATE sinh_vien (';
      $fields = array_keys($data);
      $sql .= implode(', ', $fields);

      $sql .= ') VALUES (';
      $alias = [];
      foreach ($fields as $field) {
        $alias[] = ':' . $field;
      }
      $sql .= implode(', ', $alias);
      $sql .= ')';

      $stmt = $this->connect()->prepare($sql);
      return $stmt->execute($data);
    }
    catch (PDOException $e) {
      echo $sql . '<br>' . $e->getMessage();
    }
  }
}