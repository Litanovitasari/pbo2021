<?php
namespace App;


class Esjeruk implements Minuman
{
    public function buat()
    {
        echo "masukan ke blender";
    }

    public function minum()
    {
        echo "minumlah";
    }

    public static function dilihat()
    {
        echo "cuma boleh dilihat tak boleh diminum";
    }
}