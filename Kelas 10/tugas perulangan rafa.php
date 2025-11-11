<?php
// perulangan yang mencetakan angka genap

$nilai_awal = 1;
$nilai_akhir = 50;
for ($x = $nilai_awal; $x <= $nilai_akhir; $x++) {
    if ($x % 2 == 0){
        echo $x . " ";
    }
}

// end of perulangan angka genap

//perulangan 1-100 dengan kelipatan 5

$nilai=5;
do{
    echo "$nilai";
    echo "<br>";
    $nilai = $nilai + 5;
} while($nilai <= 100);

// end of perulangan

// menampilkan tabel perkalian 8


echo "<h3>Tabel Perkalian 8</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Bilangan</th><th>Hasil Perkalian</th></tr>";

for ($i = 1; $i <= 10; $i++) {
    $result = 8 * $i;
    echo "<tr><td>8 x $i</td><td>$result</td></tr>";
}

echo "</table>";


 
// end of menampilkan tabel perkalian 8 