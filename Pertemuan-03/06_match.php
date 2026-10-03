<?php
declare(strict_types=1);

$huruf = 'B';

$predikat = match ($huruf) {
    'A' => 'Istimewa',
    'B' => 'SangatBaik',
    'C' => 'Baik',
    'D' => 'Cukup',
    default => 'Kurang',
};
echo "Huruf $huruf -> $predikat\n";

$hari = 'Minggu';
$jenis = match ($hari) {
    'sabtu', 'minggu' => 'Akhir Pekan',
    default           => 'Hari Kerja',
};
echo "$hari adalah $jenis\n";

$kode = 0;
$hari = match ($kode){
    0   => 'nol (int)',
    '0' => 'nol (string)',
    default => 'lain',
};
echo "Kode 0 -> $hari\n";
