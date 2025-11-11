<?php
$nama ="arya";
$kelas = 10;
echo "Nama saya $nama dan saya kelas $kelas.";
echo "<br>";
echo "<br>";

// Operator aritmathic
$a = "10";
$b = "5";
$penjumlahan = $a + $b;
$pengurangan = $a - $b;
$perkalian = $a * $b;
$pembagian = $a / $b;
$modulus = $a % $b;

echo "hasil dari penjumlahan adalah $penjumlahan
kemudian untuk pengurangan hasilnya adalah $pengurangan
dan untuk perkalian adalah $perkalian
dan kemudian pembagian adalah $pembagian 
dan yang terakhir modulus adalah $modulus.";

// Operator Perbandingan
echo "Operator Perbandingan";
echo "<br>";
$x = 7;
$y = 4;
$hasil = $x > $y;
echo "$x > $y = $hasil";
echo "<br>";
$hasil = $x == $y;
echo "$x == $y = $hasil";
echo "<br>";
$hasil = $x != $b;
echo "$x != $y = $hasil";
echo "<br>";
echo "<br>";

// Operator Logika
echo "Operator Logika";
echo "<br>";
$isAdult = True;
$hasPremission = false;
$hasil = $isAdult > 0 && $hasPremission >0;
echo "$isAdult and $hasPremission = $hasil";
echo "<br>";
$hasil = $isAdult > 0 || $hasPremission > 0;
echo "$isAdult and $hasPremission = $hasil";
echo "<br>";
$hasil = ! [$isAdult == $hasPremission];
echo "$isAdult and $hasPremission = $hasil";
echo "<br>";
echo "<br>";

// Operator Penugasan
echo "Operator Penugasan";
echo "<br>";
$z = 20;
echo "nilai z = " . $z;
echo "<br>";
$z +=5;
echo "Hasil setelah += " . $z;
echo "<br>";
$z -=3;
echo "Hasil setelah -=" . $z;
echo "<br>";
$z *=2;
echo "Hasil setelah *=" . $z;
echo "<br>";
$z /=4;
echo "Hasil setelah /= " . $z;
echo "<br>";
$z %=3; 
echo "Hasil setelah %=" . $z;
echo "<br>";
echo "<br>";

// Operator penggabungan string
echo "Penggabungan String (Concatenation) ";
echo "<br>";
$firstname = "Arya";
echo "Nama Pertama: $firstname";
echo "<br>";
$lastname = "chaka" ;
echo " Nama Terakhir: $lastname";
echo "<br>";
$fullname = $firstname . " " . $lastname;
echo "Penggabungan string Nama Lengkap: " . $fullname;
echo "<br>";
echo "<br>";

echo "Penggabungan String dengan variabel ";
echo "<br>";
$greeting = "Hello";
echo "greeting: $greeting";
echo "<br>";
$name = "Alice";
echo "Name: $name";
$message= $greeting . " " . $name;
echo "<br>";
echo " Digabungkan dan di beri spasi hasil :$message";
echo "<br>";
echo "<br>";

?>