<?php

class OrangTua
{
    public $nama;

    public function makan()
    {
        echo "hallo " . $this->nama . "saatnya orang tua makan.";
    }

    public function membesarkan()
    {
        echo "hallo " . $this->nama . "anda adalah seorang orang tua yang berkewajiban membesarkan anak.";
    }
}

class Anak extends OrangTua
{
    public function makan()
    {
        echo "hallo " . $this->nama .  "saatnya anak anak makan.";
    }

    public function parentMakan()
    {
        return parent::makan();
    }
}

$mona = new Anak();
$mona->nama = ' monalisa ';
$mona->parentMakan();
echo "<br>";
$mona->membesarkan();