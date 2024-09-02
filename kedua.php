<?php

// Fungsi untuk menghitung luas lingkaran
function luasLingkaran($jari) : float {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

// Fungsi untuk menghitung keliling lingkaran
function kelilingLingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}

// Fungsi untuk menghitung volume bola
function volumeBola($jari) : float {
    $volume = (4 / 3) * 3.14 * $jari * $jari * $jari;
    return $volume;
}

// Fungsi untuk menghitung volume tabung
function volumeTabung($jari, $tinggi) : float {
    $volume = 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

// Fungsi untuk menghitung volume kerucut
function volumeKerucut($jari, $tinggi) : float {
    $volume = (1 / 3) * 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

// Contoh penggunaan fungsi
$jari = 45;
$tinggi = 100;

$luas_tanah = luasLingkaran($jari);
$keliling_tanah = kelilingLingkaran($jari);
$volume_bola = volumeBola($jari);
$volume_tabung = volumeTabung($jari, $tinggi);
$volume_kerucut = volumeKerucut($jari, $tinggi);

echo "Luas lingkaran dengan jari-jari {$jari} adalah {$luas_tanah}\n";
echo "Keliling lingkaran dengan jari-jari {$jari} adalah {$keliling_tanah}\n";
echo "Volume bola dengan jari-jari {$jari} adalah {$volume_bola}\n";
echo "Volume tabung dengan jari-jari {$jari} dan tinggi {$tinggi} adalah {$volume_tabung}\n";
echo "Volume kerucut dengan jari-jari {$jari} dan tinggi {$tinggi} adalah {$volume_kerucut}\n";
?>
