<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamaliel PHP</title>
</head>
<body>
    <form method="post">
    <b>Cek Kelulusan </b>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
            <td><input type="submit" name="submit" value="Cek Nama"></td>
        </tr>
    </table>
    </form>

    <?php 
    
    if(isset($_POST['submit']))
    {
        $nama = $_POST['nama'];
        $periksa = strtolower($nama);
        $cetak_nama = ucfirst($periksa);
        if($periksa == 'budi')
        {
            echo "Selamat $cetak_nama, kamu lulus ujian";
        }
        else if($nama == "")
        {
            echo "<b style=color:red>Nama Anda belum diisi</b>" ;
        }
        else
        {
            echo "$nama, kamu tidak lulus ujian";
        }
    }


    ?>
</body>
</html>