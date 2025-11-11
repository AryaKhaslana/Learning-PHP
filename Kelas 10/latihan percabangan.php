<form method="post" action="">
    penentu status kelulusan, masukkan nilai: <input type="text" name="nilaikelulusan"/>
    <input type="submit" value="submit"/>
</form>

<form method="post" action="">
    masukkan password anda : <input type="text" name="password">
    <input type="submit" value="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nilaikelulusan = $_POST["nilaikelulusan"];

    if ($nilaikelulusan >= 90){
        echo "lulus dengan pujian.";
    } elseif ($nilaikelulusan >= 75 && $nilaikelulusan <= 89) {
        echo "lulus.";
    } elseif ($nilaikelulusan >= 50 && $nilaikelulusan <= 74) {
        echo "Remedial.";
    } if ($nilaikelulusan < 50) {
        echo "Tidak lulus.";
    }
}
?>
