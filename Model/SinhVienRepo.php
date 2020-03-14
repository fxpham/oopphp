<?php

class SinhVienRepo extends Database {

  const TABLE_NAME = 'sinh_vien';

  function loadAll() {
    $sql = "SELECT * FROM " . self::TABLE_NAME;
    $this->stmt = $this->pdo->prepare($sql);
    $results = $this->stmt->fetchAll();
    return $results;
  }

  function load($ma_sv) {
    $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE MaSV=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$msv]);
    if ($stmt->rowCount()) {
      return $stmt->fetch();
    }
    return NULL;
  }

  function add($sinh_vien) {
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
      $sql = 'INSERT INTO ' . self::TABLE_NAME . ' (';
      $fields = array_keys($data);
      $sql .= implode(', ', $fields);

      $sql .= ') VALUES (';
      $alias = [];
      foreach ($fields as $field) {
        $alias[] = ':' . $field;
      }
      $sql .= implode(', ', $alias);
      $sql .= ')';

      $this->stmt = $this->pdo->prepare($sql);
      return $this->stmt->execute($data);
    }
    catch (PDOException $e) {
      echo $sql . '<br>' . $e->getMessage();
    }
  }

  function update($sinh_vien) {
    try {
      $sql = 'UPDATE ' . self::TABLE_NAME . ' (';
      $fields = array_keys($data);
      $sql .= implode(', ', $fields);

      $sql .= ') VALUES (';
      $alias = [];
      foreach ($fields as $field) {
        $alias[] = ':' . $field;
      }
      $sql .= implode(', ', $alias);
      $sql .= ')';

      $this->stmt = $this->pdo->prepare($sql);
      return $this->stmt->execute($data);
    }
    catch (PDOException $e) {
      echo $sql . '<br>' . $e->getMessage();
    }
  }

  function delete($ma_sv) {
    $sql = "DELETE FROM ". self::TABLE_NAME . " WHERE MaSV=?";
    $this->stmt = $this->pdo->prepare($sql);
    return $this->stmt->execute([$msv]);
  }
}