<?php 
    require_once("Mahasiswa.php");

    class MahasiswaBaru extends Mahasiswa
    {
        protected $no_registrasi;

        function __construct($nim, $nama, $tgl, $jk, $regis){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->tanggal_lahir = $tgl;
            $this->jenis_kelamin = $jk;
            $this->no_registrasi = $regis;
        }

        public function bayarGedung(){
            echo "$this->username telah membayar gedung";
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
        public function getNoRegistrasi()
        {
            return $this->no_registrasi;
        }
    }
?>