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
    <form action="lihat.php" method="get">
        <h1 align="center">Registrasi</h1>
        <table id="regtable" align="center" cellpadding="10px">
            <tr>
                <td>Nama Depan</td>
                <td><input type="text" name="fname"></td>
                <td>Nama Belakang</td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="gender" value="Pria">Pria <input type="radio" name="gender" value="Wanita">Wanita</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Konghucu">Konghucu</option>
                </select></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Daftar"></td>
            </tr>
        </table>
    </form>
</body>
</html>