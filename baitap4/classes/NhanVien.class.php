<?php

class NhanVien extends CanBo {
  private $congViec;


  public function __construct(string $ht, int $tuoi, string $gt, string $dc, string $cv) {
    parent::__construct($ht, $tuoi, $gt, $dc);
    $this->congViec = $cv;
  }

  public function getcongViec() {
    return $this->congViec;
  }

}