<?php
    namespace application\backend;
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
            echo $this->nama . " sedang mengajar<br>";
        }
        public function meneliti(){
            echo $this->nama . " sedang meneliti<br>";
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

        public function setNama($nama)
        {
            $this->nama = $nama;
        }
        public function setNip($nip)
        {
            $this->nip = $nip;
        }
        public function setGajiPokok($gaji_pokok)
        {
            $this->gaji_pokok = $gaji_pokok;
        }
        public function setNoHp($no_hp)
        {
            $this->no_hp = $no_hp;
        }
        public function setNidn($nidn)
        {
            $this->nidn = $nidn;
        }
        public function setJabatanAkademis($jabatan_akademis)
        {
            $this->jabatan_akademis = $jabatan_akademis;
        }
    
    }

    namespace application\frontend;

?>