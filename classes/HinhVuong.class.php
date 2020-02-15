<?php

class HinhVuong extends HinhChuNhat {

  public function __construct(int $canh) {
    parent::__construct($canh, $canh);
  }

}