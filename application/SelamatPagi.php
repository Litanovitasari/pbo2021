<?php

namespace App;

trait SelamatPagi
{
    public function selamatPagi($name)
    {
        if (is_null($name)) {
            echo "Selamat Pagi<br>";

        } else {
            echo "Selamat Pagi " . $name . "<br>";
        }
    }
}