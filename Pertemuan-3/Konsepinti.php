<?php

class Mobil{
    public $warna;
    public $merek;

    public function __construct($warna, $merek){
        $this->warna = $warna;
        $this->merek = $merek;
    }

    public function rem(){
        return 'Mobil ' . $this->merek . ' yang berwana ' . $this->warna . ' sedang mengerem';
    }
}

$mobil = new Mobil('Hitam', 'Toyota');

echo $mobil->rem();