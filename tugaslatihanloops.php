<!-- TUGAS LATIHAN NO. 1 -->
<?php
for ($i = 1; $i <= 10; $i++) {
    echo "Saya belajar PHP dan itu menyenangkan!<br>";
}
?>

<!-- TUGAS LATIHAN NO. 2 -->
<?php
$buah = ["Apel", "Pisang", "Mangga", "Jeruk", "Anggur"];
?>  
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buah</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Daftar Buah</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Buah</th>
        </tr>
        <?php
        $no = 1;
        foreach ($buah as $nama_buah) {
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$nama_buah</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>

<!-- TUGAS LATIHAN NO. 3 -->
<?php   
$hitungan = 10;
while ($hitungan >= 1) {
    echo $hitungan . "<br>";
    $hitungan--;
}
echo "Meluncur!";
?>