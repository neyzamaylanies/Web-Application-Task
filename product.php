<?php
  $nama_produk = "Buku PHP untuk Pemula";
  $harga_produk = 120000;
  $diskon = 0.1;
  $harga_setelah_diskon = $harga_produk - ($harga_produk * $diskon)
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
</head>
<body>
    <h2><?php echo $nama_produk; ?></h2>
    <p>Harga: Rp<?php echo number_format($harga_produk, 0, ',', '.'); ?></p>
    <p>Harga Setelah Diskon (10%): Rp<?php echo number_format($harga_setelah_diskon, 0, ',', '.'); ?></p>
</body>
</html>