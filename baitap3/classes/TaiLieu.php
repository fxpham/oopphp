<?php

abstract class TaiLieu {
  private $maTaiLieu;
  private $nhaXuatBan;
  private $soLuong;

  public function __construct(string $ma_tai_lieu, string $nha_xuat_ban, int $so_luong) {
    $this->maTaiLieu = $ma_tai_lieu;
    $this->nhaXuatBan = $nha_xuat_ban;
    $this->soLuong = $so_luong;
  }

  public function getMaTaiLieu() {
    return $this->maTaiLieu;
  }

  public function getNhaXuatBan() {
    return $this->nhaXuatBan;
  }

  public function getSoLuong() {
    return $this->soLuong;
  }
}