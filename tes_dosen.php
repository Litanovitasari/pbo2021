<?php

require_once 'initialize.php';
use application\backend\Dosen;

$dian = new Dosen('198411132015041001', 'Dian Prawira', '0800000', '50000000', '13118405', 'Tenaga Pengajar');



$dian->mengajar();
$dian->meneliti();