<?php
// Prosedural - Data dan fungsi terpisah
$nama_mobil = "Toyota";
$warna_mobil = "Merah";

function infoMobil($nama, $warna) {
    return "Mobil $nama berwarna $warna";
}

echo infoMobil($nama_mobil, $warna_mobil);
?>
