<?php

class SinhVienRepo extends Database {

  const TABLE_NAME = 'sinhvien';

  function getAll() {
    $sql = "SELECT * FROM " . self::TABLE_NAME;
    $stmt= $this->connect()->query($sql);
    $results = $stmt->fetchAll();
    return $results;
  }

  function get($ma_sv) {
    $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE MaSV=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$msv]);
    if ($stmt->rowCount()) {
      return $stmt->fetch();
    }
    return NULL;
  }
//insert into vô table, các field lấy từ database
  function add($sinh_vien) {
    $data = [
      'Ho' => $sinh_vien->getHo(),
      'TenSV' => $sinh_vien->getTen(),
      'NgaySinh' => $sinh_vien->getNgaySinh(),
      'GioiTinh' => $sinh_vien->getGioiTinh(),
      'DiaChi' => $sinh_vien->getDiaChi(),
      'DienThoai' => $sinh_vien->getDienThoai(),
      'MaLop' => $sinh_vien->getMaLop(),
    ];
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
      $this->stmt = $this->connect()->prepare($sql);
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

      $this->stmt = $this->connect()->prepare($sql);
      return $this->stmt->execute($data);
    }
    catch (PDOException $e) {
      echo $sql . '<br>' . $e->getMessage();
    }
  }

  function delete($ma_sv) {
    $sql = "DELETE FROM ". self::TABLE_NAME . " WHERE MaSV=?";
    $this->stmt = $this->connect()->prepare($sql);
    return $this->stmt->execute([$msv]);
  }
}