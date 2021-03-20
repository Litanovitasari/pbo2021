<?php

require_once 'Mahasiswa.php';

$vidi = new Mahasiswa('H1101181044','Vidita','04-11-2001','Wanita');

echo $vidi->getNim();
echo "<br>";
echo $vidi->getNama();
echo "<br>";
echo $vidi->getTanggalLahir();
echo "<br>";
echo $vidi->getJenisKelamin();

?>
