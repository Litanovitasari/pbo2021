<?php

namespace App;

class Teh implements Minuman
{
    public function buat()
    {
       echo "masukan gula dan bubuk teh kedalam gelas";
       echo "kemudian tuangkan air panas";
       echo "aduk hingga merata sehingga berwarna agak kecoklatan";
       echo "buang bubuk teh";
       
    }

    public function minum()
    {
        echo "diseruput sedikit demi sedikit";
    }

    public function tambahkanEsBatu()
    {
        echo "tambahkan es batu kedalam teh";
    }
}