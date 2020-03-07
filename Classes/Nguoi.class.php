<?php
class Nguoi {
  // Properties
  private $cmnd;
  private $ho;
  private $ten;
  private $ngaySinh;
  private $gioiTinh;
  private $diaChi;
  private $dienThoai;

  // Methods
  public function __construct(string $cmnd, string $ho, string $ten, int $ngay_sinh, string $gioi_tinh, string $dia_chi, string $dien_thoai) {
    $this->cmnd = $cmnd;
    $this->ho = $ho;
    $this->ten = $ten;
    $this->ngaySinh = $ngay_sinh;
    $this->gioiTinh = $gioi_tinh;
    $this->diaChi = $dia_chi;
    $this->dienThoai = $dien_thoai;
  }

  public function __destruct() {
    // echo "The people is {$this->cmnd}.";
  }

  /**
   * Get the value of cmnd
   */
  public function getCmnd() {
    return $this->cmnd;
  }

  /**
   * Set the value of cmnd
   *
   * @return  self
   */
  public function setCmnd($cmnd) {
    $this->cmnd = $cmnd;

    return $this;
  }

  /**
   * Get the value of ho
   */
  public function getHo() {
    return $this->ho;
  }

  /**
   * Set the value of ho
   *
   * @return  self
   */
  public function setHo($ho) {
    $this->ho = $ho;

    return $this;
  }

  /**
   * Get the value of ten
   */
  public function getTen() {
    return $this->ten;
  }

  /**
   * Set the value of ten
   *
   * @return  self
   */
  public function setTen($ten) {
    $this->ten = $ten;

    return $this;
  }

  /**
   * Get the value of ngaySinh
   */
  public function getNgaySinh() {
    return $this->ngaySinh;
  }

  /**
   * Set the value of ngaySinh
   *
   * @return  self
   */
  public function setNgaySinh($ngaySinh) {
    $this->ngaySinh = $ngaySinh;

    return $this;
  }

  /**
   * Get the value of gioiTinh
   */
  public function getGioiTinh() {
    return $this->gioiTinh;
  }

  /**
   * Set the value of gioiTinh
   *
   * @return  self
   */
  public function setGioiTinh($gioiTinh) {
    $this->gioiTinh = $gioiTinh;

    return $this;
  }

  /**
   * Get the value of diaChi
   */
  public function getDiaChi() {
    return $this->diaChi;
  }

  /**
   * Set the value of diaChi
   *
   * @return  self
   */
  public function setDiaChi($diaChi) {
    $this->diaChi = $diaChi;

    return $this;
  }

  /**
   * Get the value of dienThoai
   */
  public function getDienThoai() {
    return $this->dienThoai;
  }

  /**
   * Set the value of dienThoai
   *
   * @return  self
   */
  public function setDienThoai($dienThoai) {
    $this->dienThoai = $dienThoai;

    return $this;
  }

}