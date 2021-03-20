<?php

require_once 'Pegawai.php';

$heri = new Pegawai('198411132015041001','Heri', '0800354674', '50000555', '131545405', 'Tenaga Pengajar');

echo $heri->getNama();
echo "<br>";
echo $heri->getNip();
echo "<br>";
echo $heri->getGajiPokok();
echo "<br>";
echo $heri->getNoHp();
