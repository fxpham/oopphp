<?php

class SinhVien extends Nguoi {

  private $maSinhVien;
  private $lop;
  private $khoa;
  private $nganh;

  public function __construct(string $cmnd,
                              string $ho_ten,
                              int $ngay_sinh,
                              string $gioi_tinh,
                              string $dia_chi,
                              string $dien_thoai,
                              string $msv,
                              string $lop,
                              string $khoa,
                              string $nganh) {
    parent::__construct($cmnd, $ho_ten, $ngay_sinh, $gioi_tinh, $dia_chi, $dien_thoai);
    $this->maSinhVien = $msv;
    $this->lop = $lop;
    $this->khoa = $khoa;
    $this->nganh = $nganh;
  }


  /**
   * Get the value of maSinhVien
   */
  public function getMaSinhVien() {
    return $this->maSinhVien;
  }

  /**
   * Set the value of maSinhVien
   *
   * @return  self
   */
  public function setMaSinhVien($maSinhVien) {
    $this->maSinhVien = $maSinhVien;

    return $this;
  }

  /**
   * Get the value of lop
   */
  public function getLop() {
    return $this->lop;
  }

  /**
   * Set the value of lop
   *
   * @return  self
   */
  public function setLop($lop) {
    $this->lop = $lop;

    return $this;
  }

  /**
   * Get the value of khoa
   */
  public function getKhoa() {
    return $this->khoa;
  }

  /**
   * Set the value of khoa
   *
   * @return  self
   */
  public function setKhoa($khoa) {
    $this->khoa = $khoa;

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
}