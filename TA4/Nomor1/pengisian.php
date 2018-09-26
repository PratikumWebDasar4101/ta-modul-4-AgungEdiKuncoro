<?php 
session_start();
echo "Hallo ".$_SESSION['username']."! Silahkan isi form anda.<br>";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Pengisian</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <pre>
    <form action="prosess.php" method="post" enctype="multipart/form-data">
        Hobi            : <input type="checkbox" name="hobi[]" value="Menggambar">Menggambar<br>
                          <input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
                          <input type="checkbox" name="hobi[]" value="Menyanyi">Menyanyi<br>

        Genre Film      : <input type="checkbox" name="film[]" value="Horror">Horror<br>
                          <input type="checkbox" name="film[]" value="Anime">Anime<br>
                          <input type="checkbox" name="film[]" value="Action">Action<br>
                          <input type="checkbox" name="film[]" value="Thriler">Thriler<br>
                          <input type="checkbox" name="film[]" value="Animasi">Animasi<br>

        Tujuan Wisata   : <input type="checkbox" name="wisata[]" value="Bali">Bali<br>
                          <input type="checkbox" name="wisata[]" value="Raja Ampat">Rajaampat<br>
                          <input type="checkbox" name="wisata[]" value="Derawan">Derawan<br>
                          <input type="checkbox" name="wisata[]" value="Labuan Bajo">Labuanbajo<br>
                          <input type="checkbox" name="wisata[]" value="Bangka Belitung">Bangka Belitung<br>

        Foto            : <input type="file" name="foto" id="foto"><br>
        <input type="submit" value="submit">
    </form>
    </pre>
</body>
</html>