<?php

require_once 'MahasiswaBaru.php';

$lita = new MahasiswaBaru('H1101191058','Lita Novitasari','09-11-2001','Wanita','001');

echo $lita->getNim();
echo "<br>";
echo $lita->getNama();
echo "<br>";
echo $lita->getTanggalLahir();
echo "<br>";
echo $lita->getJenisKelamin();
echo "<br>";
echo $lita->getNoRegistrasi();

