<?php

class Lop {
  private $maLop;
  private $tenLop;
  private $maKhoa;

  public function __construct(string $ma_lop, string $ten_lop, string $ma_khoa) {
    $this->maLop = $ma_lop;
    $this->tenLop = $ten_lop;
    $this->maKhoa = $ma_khoa;
  }

  /**
   * Get the value of maLop
   */
  public function getMaLop() {
    return $this->maLop;
  }

  /**
   * Set the value of maLop
   *
   * @return  self
   */
  public function setMaLop($maLop) {
    $this->maLop = $maLop;

    return $this;
  }

  /**
   * Get the value of tenLop
   */
  public function getTenLop() {
    return $this->tenLop;
  }

  /**
   * Set the value of tenLop
   *
   * @return  self
   */
  public function setTenLop($tenLop) {
    $this->tenLop = $tenLop;

    return $this;
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
}