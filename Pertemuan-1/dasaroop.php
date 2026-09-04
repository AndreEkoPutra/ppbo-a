<?php
class Mahasiswa{
    public $nama;
    public $jurusan;

    public function perkenalan()
    {
        echo "Halo, nama saya " . $this->nama . "<br>";
        echo "Saya dari jurusan " . $this->jurusan . "<br>";
    }
}

$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Eko";
$mahasiswa1->jurusan = "Sistem Informasi";
$mahasiswa1->perkenalan();


$mahasiswa2 =  new Mahasiswa();
$mahasiswa2->nama = "Dani";
$mahasiswa2->jurusan = "Sistem Informasi";
$mahasiswa2->perkenalan();
?>