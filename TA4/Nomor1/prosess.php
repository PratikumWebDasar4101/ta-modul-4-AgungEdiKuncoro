<?php
    session_start();
    
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $dir = "photo_bank/";
    $target = $dir.$foto;

    $_SESSION['hobi']   = $_POST['hobi'];
    $_SESSION['film']   = $_POST['film'];
    $_SESSION['wisata'] = $_POST['wisata'];
    $_SESSION['foto']   = $target;

    if(!move_uploaded_file($tmp_foto, $target)){
        die("Gagal Upload!");
    }
    header("location: output.php");
?>