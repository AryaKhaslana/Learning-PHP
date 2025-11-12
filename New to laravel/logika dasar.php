<?php

$mahasiswa = [
    [
        "namadepan" => "bambang",
        "umur" => 23,
        "nim" => 112345678,
        "jurusan" => "fahutan"
    ],
    [
        "namadepan" => "boedi",
        "umur" => 23,
        "nim" => 112349078,
        "jurusan" => "farmasi"   
    ],
    [
        "namadepan" => "adi",
        "umur" => 23,
        "nim" => 233212456,
        "jurusan" => "informatika"
    ]
];

echo "<h2>Data mahasiswa</h2>";
echo "<table border='1' cellpading='5' cellspacing='0'>";

echo "<tr>";
echo " <th>No</th>";
echo " <th>namadepan</th>";
echo " <th>umur</th>";
echo " <th>nim</th>";
echo " <th>jurusan</th>";
echo "</tr>";

$nomor = 1;
foreach ($mahasiswa as $mhs) {

    $style = "";
    if($mhs["jurusan"] == "fahutan") {
        $style = "style='color: red;'";
    }

    echo "<tr" . $style . ">";

    echo "<tr>";
    echo "  <td>" . $nomor . "</td>";
    echo "  <td>" . $mhs["namadepan"] . "</td>";
    echo "  <td>" . $mhs["umur"] . "</td>";
    echo "  <td>" . $mhs["nim"] . "</td>";
    echo "  <td>" . $mhs["jurusan"] . "</td>";
    echo "</tr>";

    $nomor++;
}

echo "</table>";

?>