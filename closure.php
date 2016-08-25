<?php

$title = "Mas";
$nama = "Ibrohim";

function bisa($nama) {
	echo "Anda pasti bisa Closure, $nama \n";
}

$nama = function() use ($title, $nama) {
	return $title . ' ' . $nama;
}; //jangan lupa ; yg diawali variable

bisa($nama());

?>