<?php

class Lop {
   private $maLop;
   private $tenLop;
   private $maKhoa;
   
   public function __construct($ma_lop=null, $ten_lop, $ma_khoa){
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
   * Set the value of TenLop
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
  /**
   * Luu du lieu xuong database.
   *
   * @return void
   */
  public function save() {
    $repo = new LopRepo();
    // Neu chua co ma khoa thi tao moi.
    if (empty($this->getMaLop())) {
      return $repo->add($this);
    }
    // Cap nhat thong tin khoa.
    return $repo->update($this);
  }

  /**
   * Xoa khoa.
   */
  public function delete() {
    $repo = new LopRepo();
    $repo->delete($this->getMaLop());
  }


}
