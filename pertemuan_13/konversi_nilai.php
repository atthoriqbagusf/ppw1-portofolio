<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai</title>

    <style>
        body{
            font-family:Arial;
            margin:50px;
        }

        .hasil{
            margin-top:20px;
            padding:15px;
            color:white;
            border-radius:10px;
        }
    </style>

</head>
<body>
    
<h2>Form Konversi Nilai</h2>

<form method="POST">

    Nilai :
    <input type="number" name="nilai" min="0" max="100" required>

    <button type="submit">
        Proses
    </button>

</form>

<?php

if(isset($_POST['nilai'])){

    $nilai = $_POST['nilai'];

    if($nilai >= 85){
        $grade = "A";
        $ket = "Sangat Baik";
        $warna = "green";
    }
    elseif($nilai >= 70){
        $grade = "B";
        $ket = "Baik";
        $warna = "blue";
    }
    elseif($nilai >= 60){
        $grade = "C";
        $ket = "Cukup";
        $warna = "gold";
    }
    elseif($nilai >= 50){
        $grade = "D";
        $ket = "Kurang";
        $warna = "orange";
    }
    else{
        $grade = "E";
        $ket = "Sangat Kurang";
        $warna = "red";
    }

    echo "
    <div class='hasil' style='background:$warna'>
        <h3>Grade : $grade</h3>
        <p>$ket</p>
    </div>";
}

?>

</body>
</html>