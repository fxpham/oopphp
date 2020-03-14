<?php

class Khoa {
  private $maKhoa;
  private $tenKhoa;
  private $nganh;

  public function __construct($ma_khoa = NULL, string $ten_khoa, string $nganh) {
    $this->maKhoa = $ma_khoa;
    $this->tenKhoa = $ten_khoa;
    $this->nganh = $nganh;
  }

  /**
   * Get the value of maKhoa
   */
  public function getMaKhoa() {
    return $this->maKhoa;
  }

  /**
   * Set the value of maKhoa
   *
   * @return  self
   */
  public function setMaKhoa($maKhoa) {
    $this->maKhoa = $maKhoa;

    return $this;
  }

  /**
   * Get the value of tenKhoa
   */
  public function getTenKhoa() {
    return $this->tenKhoa;
  }

  /**
   * Set the value of tenKhoa
   *
   * @return  self
   */
  public function setTenKhoa($tenKhoa) {
    $this->tenKhoa = $tenKhoa;

    return $this;
  }

  /**
   * Get the value of nganh
   */
  public function getNganh() {
    return $this->nganh;
  }

  /**
   * Set the value of nganh
   *
   * @return  self
   */
  public function setNganh($nganh) {
    $this->nganh = $nganh;

    return $this;
  }

  public function save() {
    $repo = new KhoaRepo();
    if (empty($this->getMaKhoa())) {
      return $repo->add($this);
    }
    return $repo->update($this);
  }

  public function delete() {
    $repo = new KhoaRepo();
    $repo->delete($this->getMaKhoa());
  }
}