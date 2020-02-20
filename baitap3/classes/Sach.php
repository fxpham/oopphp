<?php

class Sach extends TaiLieu {
  private $tenTacGia;
  private $soTrang;

  public function __construct(string $ma_tai_lieu, string $nha_xuat_ban, int $so_luong, string $ten_tac_gia, int $so_trang) {
    parent::__construct($ma_tai_lieu, $nha_xuat_ban, $so_luong);
    $this->tenTacGia = $ten_tac_gia;
    $this->soTrang = $so_trang;
  }

  public function getTenTacGia() {
    return $this->tenTacGia;
  }

  public function getSoTrang() {
    return $this->soTrang;
  }

}