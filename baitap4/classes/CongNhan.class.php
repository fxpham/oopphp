<?php

class CongNhan extends CanBo {
  private $bac;


  public function __construct(string $ht, int $tuoi, string $gt, string $dc, string $bac) {
    parent::__construct($ht, $tuoi, $gt, $dc);
    $this->bac = $bac;
  }

  public function getbac() {
    return $this->bac;
  }

}