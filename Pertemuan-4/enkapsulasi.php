<?php

class Mahasiswa{
    private $nim;
    public $name;

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function getNim(){
        return $this->nim;
    }
}

$mhs = new Mahasiswa();
$mhs->setNim('H1101221059');
echo $mhs->getNim();
echo "\n";
$mhs->name = 'Andreanus Eko Putra';
echo $mhs->name;
