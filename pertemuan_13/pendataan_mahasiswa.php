<!DOCTYPE html>
<html>
<head>
    <title>Pendataan Mahasiswa</title>

    <style>

        body{
            font-family:Arial;
            margin:50px;
        }

        table{
            border-collapse:collapse;
            width:500px;
        }

        table,th,td{
            border:1px solid black;
            padding:10px;
        }

    </style>

</head>
<body>

<h2>Form Pendataan Mahasiswa</h2>

<form method="POST">

    Nama :
    <input type="text" name="nama" required>
    <br><br>

    NIM :
    <input type="text" name="nim" required>
    <br><br>

    Prodi :
    <select name="prodi" required>
        <option value="">Pilih Prodi</option>
        <option>TRPL</option>
        <option>Teknik Informatika</option>
        <option>Sistem Informasi</option>
    </select>
    <br><br>

    IPK :
    <input type="number"
           step="0.01"
           min="0"
           max="4"
           name="ipk"
           required>
    <br><br>

    Semester :
    <input type="number"
           name="semester"
           min="1"
           max="14"
           required>
    <br><br>

    <button type="submit">
        Simpan
    </button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $nama = htmlspecialchars($_POST['nama']);
    $nim = htmlspecialchars($_POST['nim']);
    $prodi = htmlspecialchars($_POST['prodi']);
    $ipk = $_POST['ipk'];
    $semester = $_POST['semester'];

    if($ipk >= 3.51){
        $predikat = "Cumlaude";
    }
    elseif($ipk >= 3.01){
        $predikat = "Sangat Memuaskan";
    }
    elseif($ipk >= 2.76){
        $predikat = "Memuaskan";
    }
    else{
        $predikat = "Cukup";
    }

    echo "
    <h3>Data Mahasiswa</h3>

    <table>

        <tr>
            <td>Nama</td>
            <td>$nama</td>
        </tr>

        <tr>
            <td>NIM</td>
            <td>$nim</td>
        </tr>

        <tr>
            <td>Prodi</td>
            <td>$prodi</td>
        </tr>

        <tr>
            <td>IPK</td>
            <td>$ipk</td>
        </tr>

        <tr>
            <td>Semester</td>
            <td>$semester</td>
        </tr>

        <tr>
            <td>Predikat</td>
            <td>$predikat</td>
        </tr>

    </table>";
}

?>

</body>
</html>