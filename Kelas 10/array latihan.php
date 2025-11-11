<?php
$buah = [];
$buah = ["10","20", "30", "40", "50"];
$buah = array("10", "20", "30", "40", "50");
//menampilkan array
foreach($buah as $data){
    echo $data . " ";
}
?>

<!-- huruf tampilan -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Perkalian 8</title>
</head>
<body>
    <h3>Masukkan Indeks (0-25) untuk Menampilkan Huruf</h3>
    <form method="POST" action="">
        <label for="index">Indeks:</label>
        <input type="number" id="index" name="index" min="0" max="25" required>
        <input type="submit" value="Tampilkan Huruf">
    </form>
</body>
</html>

<?php
// Membuat array berisi huruf A-Z
$alphabet = range('A', 'Z');

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil input indeks dari form
    $index = isset($_POST['index']) ? (int)$_POST['index'] : -1;

    // Validasi input apakah indeks berada dalam rentang yang benar
    if ($index >= 0 && $index <= 25) {
        // Menampilkan huruf berdasarkan indeks yang dimasukkan
        echo "Huruf pada indeks $index adalah: " . $alphabet[$index];
    } else {
        echo "Indeks tidak valid! Harus antara 0 dan 25.";
    }
}
// end of huruf

?>

<!-- start of array nilai rata rata --> 

<?php

$nilai_ujian = [78, 89, 93, 95, 73, 85, 87, 91, 76, 80];

$total_nilai = 0;
foreach ($nilai_ujian as $nilai) {
    $total_nilai += $nilai ;
}

$rata_rata = $total_nilai / count($nilai_ujian);

echo "total nilai: $total_nilai<br>";
echo "rata rata nilai: $rata_rata";

?>

<!-- end of array nilai rata rata -->


