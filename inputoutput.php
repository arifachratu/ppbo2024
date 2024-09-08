<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$jam = date('H');

if ($jam >= 5 && $jam < 11) {
    $salam = "Selamat pagi, ";
} elseif ($jam >= 11 && $jam < 15) {
    $salam = "Selamat siang, ";
} elseif ($jam >= 15 && $jam < 19) {
    $salam = "Selamat sore, ";
} else {
    $salam = "Selamat malam, ";
}

echo "{$salam} {$nama}, sekarang pukul " . date('H:i') . "\n";




