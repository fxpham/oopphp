<?php

class SinhVien extends Nguoi {
  private $maSinhVien;
  private $lop;
  private $khoa;
  private $nganh;

  public function __construct(string $cm, string $ht, int $t, string $gt, string $dc, 
  int $dt, string $msv, string $l, string $k, string $ng ) 
  {
    parent::__construct($cm, $ht, $t, $gt, $dc, $dt);
    $this->maSinhVien = $msv;
    $this->lop = $l;
	$this->khoa=$k;
	$this->nganh=$ng;
  }

  public function get_maSinhVien() {
    return $this->maSinhVien;
  }

  public function get_lop() {
    return $this->lop;
  }

	public function get_khoa() {
    return $this->khoa;
  }
  
  public function get_nganh() {
    return $this->nganh;
  }
}