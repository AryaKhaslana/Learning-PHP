<form method="post" action="">
    Masukkan total pembelian anda: <input type="text" name="total_pembelian" />
    <input type="submit" value="submit"/>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $total_pembelian = $_POST["total_pembelian"];

    if ($total_pembelian > 1000000){
        $diskon = 0.20;
    } elseif ($total_pembelian >=500000){
        $diskon = 0.10;
    } elseif ($total_pembelian >=100000){
        $diskon = 0.05;
    } else {
        $diskon = 0;
    }
    
    // Hitung jumlah diskon
    $diskon_nominal = $total_pembelian * $diskon;
    //hitung total pembelian setelah diskon
    $total_setelah_diskon = $total_pembelian - $diskon_nominal;
    
    //tampilkan hasil
    echo "total pembelian: Rp" . number_format($total_pembelian, 0, ',', '.') . "<br>";
    echo "diskon: Rp" . number_format($diskon_nominal, 0, ',', '.') . "<br>";
    echo "total setelah di diskon: Rp" . number_format($total_setelah_diskon, 0, ',', '.') . "<br>";
}
?>                                         