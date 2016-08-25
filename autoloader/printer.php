<?php 

class Printer {
	public function cetakBuku($buku) {  //nama fungsi jangan sama dg nama class, $buku adalah parameter 
		echo "Class = " . __CLASS__ . " : ";
		echo "Mencetak buku $buku \n";
		return "Buku $buku";
	}
}

?>