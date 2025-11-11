<?php
// Array untuk menyimpan nilai 10 siswa
$nilai_siswa = [];

// Memasukkan nilai-nilai ke dalam array
echo "Masukkan nilai ujian untuk 10 siswa:\n";
for ($i = 0; $i < 10; $i++) {
    $nilai_siswa[$i] = (int)readline("Nilai siswa ke-" . ($i + 1) . ": ");
}

// Menampilkan semua nilai yang telah dimasukkan
echo "\nNilai yang telah dimasukkan:\n";
foreach ($nilai_siswa as $index => $nilai) {
    echo "Siswa ke-" . ($index + 1) . ": " . $nilai . "\n";
}

// Menghitung rata-rata nilai
$rata_rata = array_sum($nilai_siswa) / count($nilai_siswa);

// Menentukan nilai tertinggi dan nilai terendah
$nilai_tertinggi = max($nilai_siswa);
$nilai_terendah = min($nilai_siswa);

// Menampilkan hasil
echo "\nHasil Analisis Nilai:\n";
echo "Rata-rata nilai: " . $rata_rata . "\n";
echo "Nilai tertinggi: " . $nilai_tertinggi . "\n";
echo "Nilai terendah: " . $nilai_terendah . "\n";
?>
