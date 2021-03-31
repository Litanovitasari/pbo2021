<?php
    namespace application\backend;
    require_once("User.php");

    class Mahasiswa extends User{
        protected $nim;
        protected $nama;
        protected $tanggal_lahir;
        protected $jenis_kelamin;

        function __construct($nim, $nama, $tgl, $jk){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->tanggal_lahir = $tgl;
            $this->jenis_kelamin = $jk;
        }

        public function tampilkanAngkatan(){ 
            $akt = substr($this->nim, 5, -4);
            echo "Merupakan angkatan tahun 20" . $akt;
        }

        public function tampilkanUmur(){
            $tgl_lahir = date_create($this->tanggal_lahir);
            $umur = date_diff($tgl_lahir, date_create("today"))->y;
            echo $umur;
        }

        public function tampilkanNama(){
            echo $this->nama;
        }

        public function getNim()
        {
            return $this->nim;
        }
        public function getNama()
        {
            return $this->nama;
        }
        public function getTanggalLahir()
        {
            return $this->tanggal_lahir;
        }
        public function getJenisKelamin()
        {
            return $this->jenis_kelamin;
        }

        public function setNim($nim)
        {
            $this->nim = $nim;
        }
        public function setNama($nama)
        {
            $this->nama = $nama;
        }
        public function setTanggalLahir($tanggal_lahir)
        {
            $this->tanggal_lahir = $tanggal_lahir;
        }
        public function setJenisKelamin($jenis_kelamin)
        {
            $this->jenis_kelamin = $jenis_kelamin;
        }
    }
?>