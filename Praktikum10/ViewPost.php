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
    <div id="judul">
        <?php
        $judul = $_GET['judul'];
        echo '' .$judul. '';
        ?>
    </div>

    <div id="name">
        <?php
        $name = $_GET['name'];
        echo ''.$name. '';
        ?>
    </div>

    <div id="datetime">
        <?php
        $datetime = $_GET['datetime'];
        echo ''.$datetime. '';
        ?>
    </div>

    <div id="berita">
        <?php
        $berita = $_GET['berita'];
        echo ''.$berita. '';
        ?>
    </div>
</body>
</html>