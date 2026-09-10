<?php

class Mobil {
    public function info() {
        echo "Ini adalah mobil";
    }
}

class Civic extends Mobil {
    public function info() {
        parent::info(); // cara menggunakan parent::
        echo " dan modelnya Civic";
    }
}

$mobil = new Civic();
$mobil->info();
