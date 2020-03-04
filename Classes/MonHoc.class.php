<?php

class MonHoc {
  private $maMH;
  private $tenMH;

  public function __construct(string $ma_mon_hoc, string $ten_mon_hoc) {
    $this->maMH = $ma_mon_hoc;
    $this->tenMH = $ten_mon_hoc;
  }

  /**
   * Get the value of maMH
   */
  public function getMaMH() {
    return $this->maMH;
  }

  /**
   * Set the value of maMH
   *
   * @return  self
   */
  public function setMaMH($maMH) {
    $this->maMH = $maMH;

    return $this;
  }

  /**
   * Get the value of tenMH
   */
  public function getTenMH() {
    return $this->tenMH;
  }

  /**
   * Set the value of tenMH
   *
   * @return  self
   */
  public function setTenMH($tenMH) {
    $this->tenMH = $tenMH;

    return $this;
  }
}