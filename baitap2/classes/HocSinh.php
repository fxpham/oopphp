<?php

class HocSinh {

  private $hoTen;
  private $tuoi;
  private $queQuan;

  public function __construct(string $ho_ten, int $tuoi, string $que_quan) {
    $this->hoTen = $ho_ten;
    $this->tuoi = $tuoi;
    $this->queQuan = $que_quan;
  }

  public function getHoTen() {
    return $this->hoTen;
  }

  public function getTuoi() {
    return $this->tuoi;
  }

  public function getQueQuan() {
    return $this->queQuan;
  }

  public function xuat() {
    echo sprintf("Họ và tên: %s", $this->getHoTen());
    echo '<br>';
    echo sprintf("Tuổi: %d", $this->getTuoi());
    echo '<br>';
    echo sprintf("Quê quán: %s", $this->getQueQuan());
  }
}