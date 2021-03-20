<?php

require_once 'Dosen.php';

$dian = new Dosen('198411132015041001', 'Dian Prawira', '0800000', '50000000', '13118405', 'Tenaga Pengajar');

echo $dian->getNama();
echo "<br>";
echo $dian->getNip();
echo "<br>";
echo $dian->getGajiPokok();
echo "<br>";
echo $dian->getNoHp();
echo "<br>";
echo $dian->getNidn();
echo "<br>";
echo $dian->getJabatanAkademis();

$dian->mengajar();
$dian->meneliti();