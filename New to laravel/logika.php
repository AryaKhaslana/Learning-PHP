<?php

// 1. Cek dulu apakah datanya beneran dikirim pakai POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 2. Ambil data dari form (yang punya name="username")
    //    Kita juga pakai htmlspecialchars() biar aman dari hacker iseng
    $nama_user = htmlspecialchars($_POST['username']);

    // 3. Tampilkan datanya
    echo "<h1>Halo, " . $nama_user . "!</h1>";
    echo "<p>Data kamu sudah berhasil kami terima.</p>";
    echo "<a href='index.php'>Kembali ke Form</a>";

} else {
    // 4. Kalo file ini diakses langsung (bukan dari form)
    //    Kita usir aja.
    echo "Akses dilarang. Silakan isi form dulu.";
    header("Refresh: 3; url=index.html"); // Balikin ke form setelah 3 detik
}

?>