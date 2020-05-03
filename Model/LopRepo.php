<?php

class LopRepo extends Database {
    const TABLE_NAME = 'lop';

  /**
   * Lay danh sach lop
   *
   * @return array
   */
  public function getAll() {
    $sql = "SELECT * FROM " . self::TABLE_NAME;
    $stmt = $this->connect()->query($sql);
    $results = $stmt->fetchAll();
    return $results;
  }

  /**
   * Get mot khoa dua tren id
   *
   * @param [type] $id
   * @return void
   */
  public function get($id) {
    $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE MaLop=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
    if ($stmt->rowCount()) {
      return $stmt->fetch();
    }
    return NULL;
  }

  /**
   * Them khoa
   *
   * @param [type] $lop
   * @return void
   */
  public function add(Lop $lop) {
    $data = [
      'TenLop' => $lop->getTenLop(),
      'MaKhoa' => $lop->getMaKhoa(),
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
      $stmt = $this->connect()->prepare($sql);
      return $stmt->execute($data);
    }
    catch (PDOException $e) {
      echo $sql . '<br>' . $e->getMessage();
    }
  }

  /**
   * Cap nhat Lop
   *
   * @param Lop $lop
   * @return void
   */
  public function update(Lop $lop) {
    $data = [
      'MaLop' => $lop->getMaLop(),
      'TenLop' => $lop->getTenLop(),
      'MaKhoa' => $lop->getMaKhoa(),
    ];
    try {
      $sql = 'UPDATE ' . self::TABLE_NAME;
      $fields = array_keys($data);

      $sql .= ' SET ';
      $alias = [];
      foreach ($fields as $field) {
        if ($field !== 'MaLop')
        $alias[] = $field . '=:' . $field;
      }
      $sql .= implode(', ', $alias);
      $sql .= ' WHERE MaLop=:MaLop';
      $stmt = $this->connect()->prepare($sql);
      return $stmt->execute($data);
    }
    catch (PDOException $e) {
      echo $sql . '<br>' . $e->getMessage();
    }
  }

  /**
   * Xoa lop
   *
   * @param [type] $id
   * @return void
   */
  public function delete($id) {
    $sql = "DELETE FROM ". self::TABLE_NAME . " WHERE MaLop=?";
    $stmt = $this->connect()->prepare($sql);
    return $stmt->execute([$id]);
  }
}