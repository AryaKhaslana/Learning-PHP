<?php
$harga_awal = 150;  // Harga barang sebelum diskon
$diskon = 0;        // Variabel untuk menyimpan diskon

// Menentukan diskon berdasarkan harga
if ($harga_awal > 100) {
    $diskon = 0.10 * $harga_awal;  // Diskon 10%
} elseif ($harga_awal > 50) {
    $diskon = 0.05 * $harga_awal;  // Diskon 5% untuk harga antara 50 dan 100
} else {
    $diskon = 0;  // Tidak ada diskon jika harga <= 50
}

// Menghitung harga setelah diskon
$harga_setelah_diskon = $harga_awal - $diskon;

echo "Harga Awal: Rp" . $harga_awal . "<br>";
echo "Diskon: Rp" . $diskon . "<br>";
echo "Harga Setelah Diskon: Rp" . $harga_setelah_diskon . "<br>";
?>
