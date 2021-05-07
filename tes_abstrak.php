<?php
require_once ('vendor/autoload.php');

use App\Cendol;
use App\Kopi;
use App\Teh;
use App\Esjeruk;

$cendol_dian = new Cendol();
$cendol_dian->minum();

$kopi_aming = new Kopi();
$kopi_aming->buat();
$kopi_aming->minum();

$kopi_asiang = new Kopi();
//$kopi_asiang->buat();
$kopi_asiang->minum();


$teh_saya = new Teh();
$teh_saya->tambahkanEsBatu();

Esjeruk::dilihat();