<?php

// operator aritmatika

$a=10;
echo "Nilai a =".$a."<br>";
$b=45;
echo "Nilai b =".$b."<br>";
$jumlah = $a + $b ;
echo "hasil jumlah =" . $jumlah;
$kurang = $a - $b ;
echo "hasil kurang =" . $kurang;
$kali = $a * $b ;
echo "hasil kali =". $kali;

// end of operator aritmatika


$hari = "Jumat";

switch ($hari) {
    case "Senin":
        echo "Awal minggu, semangat kerja!";
        break;
    case "Jumat":
        echo "Yeay, hampir akhir minggu!";
        break;
    case "Minggu":
        echo "Waktunya santai!";
        break;
    default:
        echo "Hari nggak dikenal, tetep semangat!";
}



?>