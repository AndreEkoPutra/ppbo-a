<?php

class Mahasiswa{

    protected $name;
    
}

class MahasiswaAktif extends Mahasiswa{

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

$mhs = new MahasiswaAktif();
$mhs->setName('Dani Ali');
echo $mhs->getName();