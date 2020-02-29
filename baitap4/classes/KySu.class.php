<?php

class KySu extends CanBo {
  private $nganhDaoTao;


  public function __construct(string $ht, int $tuoi, string $gt, string $dc, string $nganhdt) {
    parent::__construct($ht, $tuoi, $gt, $dc);
    $this->nganhDaoTao = $nganhdt;
  }

  public function getnganhDaoTao() {
    return $this->nganhDaoTao;
  }

}