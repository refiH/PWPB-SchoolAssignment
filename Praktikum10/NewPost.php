<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post</title>
    <link rel="stylesheet" href="style.css?">
    <script src="https://kit.fontawesome.com/3bdf8f4880.js" crossorigin="anonymous"></script>
</head>

<body>
    <form action="ViewPost.php" method="get">
        <h1 align="center">Input Berita</h1>
        <table id="regtable" align="center" cellpadding="10px">
            <tr>
                <td><i class="fa-solid fa-pen-nib"></i> Penulis</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td><i class="fa-solid fa-calendar"></i> Tanggal & Waktu Post</td>
                <td><input type="datetime-local" name="datetime"></td>
            </tr>
            <tr>
                <td><i class="fa-solid fa-tag"></i> Judul</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td><i class="fa-solid fa-newspaper"></i> Isi Berita</td>
                <td><textarea name="berita" cols="70" rows="10"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>