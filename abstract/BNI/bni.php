<?php

class BNI {

	private $saldo; 

	public function __construct($pin) {  //__construct utk membangun object BNI
		// misal cek PIN (disimpan di script langsung belum disimpan didatabase)
		if ($pin == '1234') {
			echo "Berhasil mengaktifkan Kartu BNI ! \n";
		}
		else {
			$pesan = "PIN yang Anda masukan salah !! \n";
			throw new Exception($pesan);
		}
	}

	private function catatTransaksi($jenis, $jumlah) {
		echo "Mencatat transaksi $jenis sejumlah $jumlah ke Bku Tabungan \n";
	}

	public function kredit($jumlah) { //mengurangi jumlah saldo
		$this -> catatTransaksi('transfer keluar', $jumlah);
		$this -> saldo -= $jumlah;
	}

	public function deposit($jumlah) { //menambah jumlah saldo
		$this -> catatTransaksi('deposit dana', $jumlah);
		$this -> saldo += $jumlah;
	}

	public function cekSaldo() { // cek saldo sekarang
		return $this -> saldo;

	}
}



?>