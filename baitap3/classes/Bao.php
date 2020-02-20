<?php

class Bao extends TaiLieu {
  private $ngayPhatHanh;

  public function __construct(string $ma_tai_lieu, string $nha_xuat_ban, int $so_luong, int $ngay_phat_hanh) {
    parent::__construct($ma_tai_lieu, $nha_xuat_ban, $so_luong);
    $this->ngayPhatHanh = $ngay_phat_hanh;
  }

  public function getNgayPhatHanh() {
    return $this->ngayPhatHanh;
  }

}