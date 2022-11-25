<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pribadi</title>
    <link rel="stylesheet" href="style.css?<?php echo time(); ?>">
</head>

<body id="databody">
    <h1 id="title">Biodata</h1>

    <div class="container">
        <img src="Media/refi.jpg" alt="Refi" onclick="Expand()">
        <div class="desc">
            <?php
            echo '<h1>Refi Hikman Gifari</h1>lahir di Bandung 15 Februari 2006. 
            Asal sekolah saya adalah SMKN 4 Bandung dengan jurusan Pengembangan Perangkat Lunak dan Gim (PPLG)
            yang sekarang sedang duduk di kelas 11, XI PPLG 1.';
            ?>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>