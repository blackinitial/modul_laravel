<?php

$nama = function () {
	return "Ibrohim Mahmud";
}; // jangan lupa ; di akhir bila diawali variable

function bisa($nama) {
	echo "Anda pasti bisa Laravel, $nama! \n";
}

bisa ($nama());

?>