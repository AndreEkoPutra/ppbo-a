<?php
// PROSEDURAL
function luasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}
echo "Luas (Prosedural): " . luasPersegiPanjang(10, 5) . "<br>";

// OOP
class PersegiPanjang {
    public $panjang;
    public $lebar;
    
    function hitungLuas() {
        return $this->panjang * $this->lebar;
    }
}

$pp = new PersegiPanjang();
$pp->panjang = 10;
$pp->lebar = 5;
echo "Luas (OOP): " . $pp->hitungLuas();
?>
