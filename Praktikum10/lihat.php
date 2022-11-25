<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="lihat">
        <?php
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        $date = $_GET['date'];
        $gender = $_GET['gender'];
        $agama = $_GET['agama'];
        $alamat = $_GET['alamat'];

        echo 'Selamat Datang <b>' .$fname. ' ' .$lname. '</b>, anda telah berhasil daftar. Data diri anda : <br>';
        echo 'Tempat, Tanggal Lahir : <b>' .$date. '</b><br>';
        echo 'Jenis Kelamin : <b>'.$gender. '</b><br>';
        echo 'Agama : <b>'.$agama. '</b><br>';
        echo 'Alamat : <b>'.$alamat. '</b><br>';
        ?>
    </div>
</body>
</html>