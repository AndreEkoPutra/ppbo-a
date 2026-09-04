<?php
function sapaan(){
    echo "Halo, selamat datang di Praktikum PBO!";
}

function sapa($nama){
    echo "Hallo, $nama!, selamat datang di Praktikum PBO!";
}

sapa("Eko");

function pertambahan($angka1, $angka2){
    return $angka1 + $angka2;
}

echo "<br>Hasil dari angka 1 + angka 2 = " . pertambahan(10,5);
?>