<?php

class Mahasiswa{
    private $name;

    public function getName(){ // Digunakan untuk bisa mengambil nilai properti
        return $this->name;
    }

    public function setName($name){ // Digunakan untuk bisa memberi nilai properti
        $this->name = $name;
    }
}