<!DOCTYPE html>
<html>
<head>
    <title>Informasi Bulan</title>
</head>
<body>
<?php
$namaBulan = date("F");
$hariIni = date("d");
$totalHari = date("t");
$sisaHari = $totalHari - $hariIni;
?>
<h2>Informasi Bulan Sekarang</h2>
<p>Bulan Saat Ini : <?php echo $namaBulan; ?></p>
<p>Sisa Hari di Bulan Ini : <?php echo $sisaHari; ?> hari</p>
</body>
</html>