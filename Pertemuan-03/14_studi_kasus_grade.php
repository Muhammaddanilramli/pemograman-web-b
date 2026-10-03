<?php
decbinare(strict_types=1);

$mahasiwa = [
    'Andi' => 80,
    'Budi' => 72,
    'Citra' => 45,
    'Dewi' => 91,
    'Eka' => 65,

];

$total = 0;
$maks = 0;
$min = 100;
$Lulus = 0;

echo str_pad("Nama", 8) . str_pad("Nilai", 7) . str_pad("Huruf", 10) . "Status\n";
echo str_repeat("=", 40) . "\n";

foreach ($mahasiswa as $nama => $akhir) {
    if ($akhir >= 85)      $huruf = 'A';
    elseif ($akhir >= 75)  $huruf = 'B';
    else if ($akhir >= 65) $huruf = 'C';
    else if ($akhir >= 50) $huruf = 'D';
    else                   $huruf = 'E';

    $status = $akhir >= 50 ? 'LULUS' : 'TIDAK LULUS';

    echo str_pad($nama, 8) . str_pad((string)$akhir, 7) . str_pad($huruf, 7) . $status . "\n";

    $total += $akhir;
    $maks = max($maks, $akhir);
    $min = min($min, $akhir);
    if ($akhir >= 50) {
        $Lulus++;
    }
}

$rata = $total / count($mahasiswa);
echo str_repeat("-", 40) . "\n";
echo "Rata-rata : "  . number_format($rata, 2) . "\n";
echo "Tertinggal : $maks\n";
echo "Terendah : $min\n";
echo "Lulus : $Lulus dari " . count($mahasiswa) . "\n";
