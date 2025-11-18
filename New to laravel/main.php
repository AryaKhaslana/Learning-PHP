<?php

$siswa = [
    [
        "nama" => "arya",
        "usia" => 16,
        "jenis_kelamin" => "cowo"
    ],
    [
        "nama" => "richie",
        "usia" => 16,
        "jenis_kelamin" => "cowo"
    ],
    [
        "nama" => "chico",
        "usia" => 16,
        "jenis_kelamin" => "cowo"
    ]
];

foreach ($siswa as $swa) {

    $style = "";
    if($swa["nama"] == "arya") {
        $style = "style='color: red;'";
    }

    echo "<br>" . $swa["nama"];
    echo $swa["usia"];
    echo $swa["jenis_kelamin"];
};


?>