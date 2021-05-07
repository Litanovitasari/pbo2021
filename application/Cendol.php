<?php
namespace App;

use App\Minuman;

class Cendol implements Minuman
{
    public function buat()
    {
        echo "Tambahkan cendol, masukan santan dan air gula merah cair";
        echo "Tambahkan es batu";
    }

    public function minum()
    {
        echo "disedot dengan pipet";
    }

    public function diberikanPadaTeman()
    {
        echo "ini untukmu";
    }
}