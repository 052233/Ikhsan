<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamaliel PHP</title>
</head>
<body>
    <!-- Proses PHP di halaman yan sama -->
    <form method="post">

    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
            <td><input type="submit" name="kirim" value="Cek Nama"></td>
        </tr>
    </table>
    </form>
    <p>
    <?php 
    if(isset($_POST['kirim']))
    {
        $nama = $_POST['nama'];
        echo "Halo $nama , Selamat Datang";
    }

    ?>
    </p>
</body>
</html>