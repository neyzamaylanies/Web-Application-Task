<!-- TUGAS LATIHAN NO. 1 -->

<?php
    $nilai = rand(0, 100);

    if ($nilai > 90) {
        echo "Luar Biasa";
    } elseif ($nilai > 80) {
        echo "Baik";
    } elseif ($nilai > 70) {
        echo "Cukup";
    } else {
        echo "Kurang";
    }
?>

<!-- TUGAS LATIHAN NO. 2 -->

<?php
$hari = "Jumat"; //bisa pake date("l") untuk hari otomatis

echo "Selamat datang di toko kami!<br>";
echo "Hari ini adalah hari $hari.<br>";

// Menggunakan switch untuk menentukan promo
switch ($hari) {
    case "Jumat":
        echo "Diskon 15% untuk semua produk!";
        break;

    case "Sabtu":
    case "Minggu":
        echo "Nikmati promo Beli 1 Gratis 1!";
        break;

    default:
        echo "Belum ada promo hari ini.";
}
?>