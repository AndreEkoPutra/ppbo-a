<?php

Class Produk{
    protected $nama;
    protected $harga;

    public function __construct($nama, $harga){
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getInfo(){ // method milik parent
        echo $this->nama . ' dihargai Rp' . $this->harga;
    }
}

Class Kendaraan extends Produk{
    private $kategori;
    
    public function __construct($nama, $harga, $kategori){
        parent::__construct($nama, $harga);
        $this->kategori = $kategori;
    }

    public function getInfo(){ // Ini adalah overriding
        echo $this->nama . ' adalah ' . $this->kategori . ' yang dihargai Rp' . $this->harga;
    }
}

$baju = new Produk('Kemeja', '60.000');
$baju->getInfo();

echo PHP_EOL. '<br>';

$civic = new Kendaraan('Civic', '2.250.000.000', 'Mobil');
$civic->getInfo();