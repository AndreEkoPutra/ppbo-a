<?php

Class Produk{
    protected $nama;
    protected $harga;

    public function __construct($nama, $harga){
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getInfo(){
        echo $this->nama . " memiliki harga Rp" . $this->harga;
    }
}

Class Kendaraan extends Produk{
    private $merek;
    public function __construct($nama, $harga, $merek){
        parent::__construct($nama,$harga);
        $this->merek = $merek;
    }

    public function getInfo(){
        echo $this->nama . " memiliki harga Rp" . $this->harga . ' yang termasuk merek ' . $this->merek;
    }
}

$ferari = new Kendaraan('Ferari', '5.000.000.000', 'Toyota');
$ferari->getInfo();