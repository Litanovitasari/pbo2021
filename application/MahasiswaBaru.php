<?php 
    namespace application\backend;
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
        public function setNoRegistrasi($no_registrasi)
        {
            $this->no_registrasi = $no_registrasi;
        }
    }

?>