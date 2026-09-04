<?php
class Produk{

    public $nama_barang;
    private $harga;
    
    public function setharga($harga){
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga;
    }
}

$mie = new Produk();
$mie->nama_barang='Mie Kaldu';
$mie->setharga(2300);
echo $mie->nama_barang . ' harganya Rp' . $mie->getHarga() . PHP_EOL;


$botol = new Produk();
$botol->nama_barang='Aqua';
$botol->setHarga(4000);
echo $botol->nama_barang . ' harganya Rp' . $botol->getHarga();