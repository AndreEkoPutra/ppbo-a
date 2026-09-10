<?php

trait Logger{
    public function log($pesan){
        echo "Log : " . $pesan;
    }
}

Class Karyawan{
    use Logger;
}

Class Manejer{
    use Logger;
}

$karyawan = new Karyawan();
$karyawan->log("Karyawan telah masuk");

echo PHP_EOL;
$manejer = new Manejer();
$manejer->log("Manejer telah masuk");