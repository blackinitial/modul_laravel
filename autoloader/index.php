<?php

include 'printer.php';
$printer = new Printer();
$buku = $printer -> cetakBuku ('Menyelami Framework Laravel');

include 'kurir.php';
$kurir = new Kurir(); // manggil class
$kurir -> kirim ($buku, 'Bandung'); // manggil fungsi


?>