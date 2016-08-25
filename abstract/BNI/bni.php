<?php

class BNI {

	private $saldo;

	public function __construct($pin) {
		// misal cek PIN ke database
		if ($pin == '1234') {
			echo "Berhasil mengaktifkan Kartu BNI ! \n";
		}
		else {
			$pesan = "PIN yang Anda masukan salah !! \n";
			throw new Exception($pesan);
		}
	}
}



?>