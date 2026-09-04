<?php
function hitungNilaiAkhir($tugas, $uts, $uas){
    return ($tugas * 0.2) + ($uts * 0.4) + ($uas * 0.4);
}

function grade($nilai){
    if ($nilai >= 80){
        return "A";
    } elseif ($nilai >= 75){
        return "B";
    } elseif ($nilai >= 70){
        return "C";
    } elseif ($nilai >= 60){
        return "D";
    } else {
        return "E";
    }
}

$nilai_akhir = hitungNilaiAkhir(50, 60, 80);
echo "Nilai anda : " . $nilai_akhir;
echo "<br>Kategori nilai anda adalah " . grade($nilai_akhir);
?>