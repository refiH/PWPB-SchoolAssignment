<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo in php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>DATA PRIBADI SAYA</h1>
    <br>
    <p>
        <?php
        $nama_saya = "Kevin";
        $kelas = "XI RPL 1";
        $nis = 20202011221;
        $umur = 16;
        $berat_badan = 50.78;
        echo ("Nama Saya $nama_saya <br />");
        echo "sekarang kelas $kelas dan NIS saya $nis <br />";
        echo 'Umur saya sekarang adalah '. $umur . ' tahun <br />';
        echo "Berat badan saya $berat_badan Kg";
        ?>
    </p>
</body>
</html>