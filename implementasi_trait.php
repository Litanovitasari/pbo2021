<?php

require_once ('vendor/autoload.php');

use App\Person;

$lita = new Person;

$lita->selamatPagi('Epri');
$lita->hasName = 'Lita Novitasari';
echo $lita->hasName;