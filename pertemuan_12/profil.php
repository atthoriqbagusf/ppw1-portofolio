<!DOCTYPE html>
<html>
<head>
    <title>Profil Diri</title>
</head>
<body>
<?php
$nama = "Atthoriq Bagus Fadillah";
$nim = "231011";
$prodi = "Teknik Informatika";
$asalKota = "Karanganyar";
?>
<h2>Profil Diri</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>Data</th>
        <th>Keterangan</th>
    </tr>
    <tr>
        <td>Nama</td>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <td>NIM</td>
        <td><?php echo $nim; ?></td>
    </tr>
    <tr>
        <td>Prodi</td>
        <td><?php echo $prodi; ?></td>
    </tr>
    <tr>
        <td>Asal Kota</td>
        <td><?php echo $asalKota; ?></td>
    </tr>
</table>
</body>
</html>