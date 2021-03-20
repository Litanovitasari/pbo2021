<?php
    require_once("Pegawai.php");

    class Dosen extends Pegawai
    {
        protected $nidn;
        protected $jabatan_akademis;

        function __construct($nip, $nama, $hp, $gaji, $nidn, $jabatan){
            $this->nip = $nip;
            $this->nama = $nama;
            $this->no_hp = $hp;
            $this->gaji_pokok = $gaji;
            $this->nidn = $nidn;
            $this->jabatan_akademis = $jabatan;
        }

        public function mengajar(){

        }
        public function meneliti(){

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
        public function getNidn()
        {
            return $this->nidn;
        }
        public function getJabatanAkademis()
        {
            return $this->jabatan_akademis;
        }
    
    }
?>