<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan heredoc sintax</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Penggunaan heredoc sintax</h1>
    <?php
    $STRINGKU = <<<AKHIR
    MENGGUNAKAN PHP.
    AKHIR;
    echo <<<KET
    String yang dihasilkan menggunakan heredoc sintax <br>
    \$STRINGKU = $STRINGKU
    KET;
    ?>
</body>
</html>