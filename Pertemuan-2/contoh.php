<?php

class Mobil
{
    public function __destruct()
    {
        echo "Objek Mobil telah dihancurkan.";
    }
}

$mobil1 = new Mobil();

echo "Mobil sedang digunakan.<br>";