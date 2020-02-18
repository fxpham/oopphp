<?php

class SoPhuc {

  private $phanThuc;
  private $phanAo;

  public function __construct(float $phan_thuc, float $phan_ao) {
    $this->phanThuc = $phan_thuc;
    $this->phanAo = $phan_ao;
  }

  public function cong(SoPhuc $so_phuc) {
    $thuc = $this->phanThuc + $so_phuc->phanThuc;
    $ao = $this->phanAo + $so_phuc->phanAo;
    return new SoPhuc($thuc, $ao);
  }

  public function nhan(SoPhuc $so_phuc) {
    $thuc = $this->phanThuc * $so_phuc->phanThuc - $this->phanAo * $so_phuc->phanAo;
    $ao = $this->phanThuc * $so_phuc->phanAo + $this->phanAo * $so_phuc->phanThuc;
    return new SoPhuc($thuc, $ao);
  }

  public function xuat() {
    echo sprintf('%.2f + %.2fi', $this->phanThuc, $this->phanAo);
  }
}