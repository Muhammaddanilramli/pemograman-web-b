<?php
declare(strict_types=1);

$sudahlogin = true;
$peran = 'admin';

if ($sudahlogin) {
    if ($peran === 'admin') {
        echo "Selamat datang admin. Akses penuh \n";
    } elseif ($peran === 'operator') {
        echo "Selamat datang operator. Akses Terbatas \n";
    } else {
        echo "Peran tidak dikenal. \n";
    }
} else {
    echo "Silakan login terlebih dahulu. \n";
}

$terverifikasi = true;
$saldo = 120000;
if ($sudahlogin && $terverifikasi && $saldo >= 100000) {
    echo "Transaksi besar diizinkan. \n";
}
