<?php

class TapChi extends TaiLieu {
  private $soPhatHanh;
  private $thangPhatHanh;

  public function __construct(string $ma_tai_lieu, string $nha_xuat_ban, int $so_luong, int $so_phat_hanh, int $thang_phat_hanh) {
    parent::__construct($ma_tai_lieu, $nha_xuat_ban, $so_luong);
    $this->soPhatHanh = $so_phat_hanh;
    $this->thangPhatHanh = $thang_phat_hanh;
  }

  public function getSoPhatHanh() {
    return $this->soPhatHanh;
  }

  public function getThangPhatHanh() {
    return $this->thangPhatHanh;
  }

}