<?php
// Variabel
$nama = "Mahasiswa PBO";
$nim = "20240001";
$nilai_uts = 85.5;
$nilai_uas = 90;
$lulus = true;

// Menampilkan data
echo "Nama: $nama <br>";
echo "NIM: $nim <br>";
echo "Nilai UTS: $nilai_uts <br>";
echo "Nilai UAS: $nilai_uas <br>";
echo "Status Lulus: " . ($lulus ? "Ya" : "Tidak") . "<br>";

?>