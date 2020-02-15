<?php

class HinhChuNhat {
  private $dai;
  private $rong;

  public function __construct(int $dai, int $rong) {
    $this->dai = $dai;
    $this->rong = $rong;
  }

  public function square() {
    return $this->dai * $this->rong;
  }

}