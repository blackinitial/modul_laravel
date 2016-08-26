<?php

require_once 'pembeli.php';

//melakukan pembelian (input)
try {
	$bniku = new BNI ('1234');
	$bniku -> deposit(1000000);
	$sugeng =new Pembeli('Sugeng', $bniku);
	$sugeng -> beli("CD Smash - Step Forward", 80000);

	echo "Saldo terakhir Rp " . $bniku -> cekSaldo() . "\n";
}

catch (Exception $e) {
	echo $e -> getMessage() . "\n";
}



?>