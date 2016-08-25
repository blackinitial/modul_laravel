<?php
//tidak bisa errror


spl_autoload_register(function ($class) {
	include $class . '.php';  //spl auto reg adl fungsi ngeload otomatis stiap apa kita panggil exxp : class dari luar folder
});

$printer = new Printer();
$buku = $printer -> cetakBuku('Menyelami Framwork Laravel');

$kurir = new Kurir();
$kurir -> kirim($buku, 'Bandung');

?>