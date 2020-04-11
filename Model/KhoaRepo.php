<?php

class KhoaRepo extends Database {

  const TABLE_NAME = 'khoa';

  public function getAll() {
    $sql = "SELECT * FROM " . self::TABLE_NAME;
    $stmt = $this->connect()->query($sql);
    $results = $stmt->fetchAll();
    return $results;
  }

  public function get($id) {
    $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE MaKhoa=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
    if ($stmt->rowCount()) {
      return $stmt->fetch();
    }
    return NULL;
  }

  public function add($khoa) {
    $data = [
      'TenKhoa' => $khoa->getTenKhoa(),
      'Nganh' => $khoa->getNganh(),
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

  public function update($khoa) {
    $data = [
      'MaKhoa' => $khoa->getMaKhoa(),
      'TenKhoa' => $khoa->getTenKhoa(),
      'Nganh' => $khoa->getNganh(),
    ];
    try {
      $sql = 'UPDATE ' . self::TABLE_NAME;
      $fields = array_keys($data);

      $sql .= ' SET ';
      $alias = [];
      foreach ($fields as $field) {
        if ($field !== 'MaKhoa')
        $alias[] = $field . '=:' . $field;
      }
      $sql .= implode(', ', $alias);
      $sql .= ' WHERE MaKhoa=:MaKhoa';
      $stmt = $this->connect()->prepare($sql);
      return $stmt->execute($data);
    }
    catch (PDOException $e) {
      echo $sql . '<br>' . $e->getMessage();
    }
  }

  public function delete($id) {
    $sql = "DELETE FROM ". self::TABLE_NAME . " WHERE MaKhoa=?";
    $this->stmt = $this->pdo->prepare($sql);
    return $this->stmt->execute([$id]);
  }
}