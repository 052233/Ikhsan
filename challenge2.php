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
            <td>Cek NIlai</td>
            <td>:</td>
            <td><input type="number" max="100" min="0" name="nilai"></td>
            <td><input type="submit" name="submit" value="Cek Nilai"></td>
        </tr>
    </table>
    </form>

    <?php 
    
    if(isset($_POST['submit']))
    {
        $nilai = $_POST['nilai'];
        if($nilai >= 80)
        {
            echo "Nilai kamu adalah A";
        }
        else if($nilai >= 76 && $nilai < 80)
        {
            echo "Nilai kamu adalah B+";
        }
        else if($nilai >= 70 && $nilai < 76)
        {
            echo "Nilai kamu adalah B";
        }
        else if($nilai >= 66 && $nilai < 70)
        {
            echo "Nilai kamu adalah C+";

        }
        else if($nilai >= 60 && $nilai < 66)
        {
            echo "Nilai kamu adalah C";
        }
        else if($nilai >= 56 && $nilai < 60)
        {
            echo "Nilai kamu adalah D";

        }
        else if($nilai < 56)
        {
            echo "Nilai kamu adalah E";
        }
    }


    ?>
</body>
</html>