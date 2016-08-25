<?php

include 'tombol.php'; //casse sensitive

class TombolNuklir extends Tombol {   // class tak case sensitive
	public function tekan() {
		echo "Bom Nuklir telah diluncurkan!  \n";
		sleep(3);
		echo "BooOOOOMMMmmmm  !!!! \n";

	}
}

?>