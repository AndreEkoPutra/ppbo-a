<?php

trait BisaTerbang{
    public function terbang(){
        echo $this->nama . ' bisa terbang';
    }
}

trait BisaBerenang{
    public function berenang(){
        echo $this->nama . ' bisa berenang';
    }
}

Class Hewan{
    protected $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }
}

Class Burung extends Hewan{
    use BisaTerbang;
}

Class Ikan extends Hewan{
    use BisaBerenang;
}

Class Bebek extends Hewan{
    use BisaBerenang, BisaTerbang;
}

$elang = new Burung('Elang');
$elang->terbang();
echo PHP_EOL;
$nemo = new Ikan('Nemo');
$nemo->berenang();
echo PHP_EOL;
$bebek = new Bebek('Bebek');
$bebek->berenang();
echo " dan ";
$bebek->terbang();