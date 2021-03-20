<?php
    require_once("User.php");

    class Pegawai extends User
    {
        protected $nip;
        protected $nama;
        protected $no_hp;
        protected $gaji_pokok;

        function __construct($nip, $nama, $hp, $gaji){
            $this->nip = $nip;
            $this->nama = $nama;
            $this->no_hp = $hp;
            $this->gaji_pokok = $gaji;
        }

        
    

        public function getNama()
        {
            return $this->nama;
        }
        public function getNip()
        {
            return $this->nip;
        }
        public function getGajiPokok()
        {
            return $this->gaji_pokok;
        }
        public function getNoHp()
        {
            return $this->no_hp;
        }
        
    }
?>