<?php
  class Nguoi {
  // Properties
	  private $cmnd;
	  private $hoTen;
	  private $tuoi;
	  private $gioiTinh;
	  private $diaChi;
	  private $dienThoai;
  
  // Methods
  public function __construct(string $cm, string $ht, int $t, string $gt, string $dc, int $dt) {
    $this->cmnd = $cm; 
	$this->hoTen=$ht;
	$this->tuoi=$t;
	$this->gioiTinh=$gt;
	$this->diaChi=$dc;
	$this->dienThoai=$dt;
  }
  function __destruct() {
    echo "The people is {$this->hoTen}."; 
  }
  function set_cmnd($cmnd) {
    $this->cmnd = $cmnd;
  }
  function get_cmnd() {
    return $this->cmnd;
  }
  function set_hoTen($ht) {
    $this->hoTen = $ht;
  }
  function get_hoTen() {
    return $this->hoTen;
  }
  function set_tuoi($t) {
    $this->tuoi = $t;
  }
  function get_tuoi() {
    return $this->tuoi;
  }
  function set_gioiTinh($gt) {
    $this->gioiTinh = $gt;
  }
  function get_gioiTinh() {
    return $this->gioiTinh;
  }
  function set_diaChi($dc) {
    $this->diaChi = $dc;
  }
  function get_diaChi() {
    return $this->diaChi;
  }
  function set_dienThoai($dt) {
    $this->dienThoai = $dt;
  }
  function get_dienThoai() {
    return $this->dienThoai;
  }
  
}
?>