<!DOCTYPE html>
<html>
<head>
    <title>Hitung IMT</title>
</head>
<body>
<?php
function hitungIMT($berat, $tinggi) {
    $imt = $berat / ($tinggi * $tinggi);
    if ($imt < 18.5) {
        $kategori = "Kurus";
    } elseif ($imt < 25) {
        $kategori = "Normal";
    } elseif ($imt < 30) {
        $kategori = "Gemuk";
    } else {
        $kategori = "Obesitas";
    }
    return [
        "imt" => round($imt, 2),
        "kategori" => $kategori
    ];
}
$berat = 70;
$tinggi = 1.75;
$hasil = hitungIMT($berat, $tinggi);
?>
<h2>Perhitungan IMT</h2>
<p>Berat Badan : <?php echo $berat; ?> kg</p>
<p>Tinggi Badan : <?php echo $tinggi; ?> m</p>
<p>Nilai IMT : <?php echo $hasil['imt']; ?></p>
<p>Kategori : <?php echo $hasil['kategori']; ?></p>
</body>
</html>