<?php

include 'bni.php';

class Pembeli {

	private $nama;
	private $bni;

	public function __construct($nama = "Orang", BNI $bni) {
		$this -> bni = $bni;
		$this -> nama = $nama;
	}

	public function beli ($nama = "barang", $harga = 0) {
		$this -> bni -> kredit($harga);
		echo "Berhasil melakukan pembelian $nama seharga Rp $harga . \n";
		echo "Terima kasih $this->nama :) \n";
	}


}


?>