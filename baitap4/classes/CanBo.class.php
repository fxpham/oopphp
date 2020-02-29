<?php
class CanBo
{
	//nên dùng private
	//nên đặt tên thuộc tính là hoTen
	private $hoTen;
	private $tuoi;
	private $gioiTinh;
	private $diaChi;

	public function __construct(string $ht, int $tuoi, string $gt,string $dc)
	{
		$this->hoTen = $ht;
		$this->tuoi = $tuoi;
		$this->gioiTinh = $gt;
		$this->diaChi = $dc;
	}
	public function gethoTen() {
    	return $this->hoTen;
  	}

	public function getgioiTinh() {
		return $this->gioiTinh;
	  }

	  public function getdiaChi() {
		return $this->diaChi;
	  }

	   public function getTuoi() {
		return $this->tuoi;
	  }

}
