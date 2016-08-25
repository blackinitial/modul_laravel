<?php

//callback = parameter berupa fungsi. exp : aray walk

$min = 70;
$datasiswa = [
	['nama' => 'Bayu', 'nilai' => '80'],
	['nama' => 'Agung', 'nilai' => '65'],
	['nama' => 'Putri', 'nilai' => '70'],
	['nama' => 'Jessika', 'nilai' => '90'],
	['nama' => 'Andi', 'nilai' => '55']

];

array_walk($datasiswa, function ($siswa) use ($min) {
	echo "Siswa : " . $siswa['nama'] . "\n";
	echo "Nilai : " . $siswa['nilai'] . "\n";
	echo "Status : ";
	if ($siswa ['nilai'] >= $min) {
		echo "Lulus \n\n";
	}
	else {
		echo "Tidak Lulus \n\n";
	}
});

?>