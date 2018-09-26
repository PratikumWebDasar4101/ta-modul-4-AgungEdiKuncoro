<?php
session_start();
?>

<table border = 1px; align="center">
    <tr>
        <th width="20%">Hobi</th>
        <th width="20%">Genre Film</th>
        <th width="20%">Tujuan Wisata</th>
        <th width="30%">Foto</th>
        <th width="10%">Opsi</th>
    </tr>
    <tr>
        <td align="center">
            <?php
                foreach($_SESSION['hobi'] as $hobi_pilihan) {
                    echo $hobi_pilihan."<br>";
                }
            ?>
        </td>
        <td align="center">
            <?php
                foreach($_SESSION['film'] as $film_pilihan) {
                    echo $film_pilihan."<br>";
                }
            ?>
        </td>
        <td align="center">
            <?php
                foreach($_SESSION['wisata'] as $wisata_pilihan) {
                    echo $wisata_pilihan."<br>";
                }
            ?>
        </td>
        <td align="center">
            <img src="<?php echo $_SESSION['foto'];?>" width = "50%;">
        </td>
        <td align="center">
            <a href="masuk.php">Logout</a>
        </td>
    </tr>
</table>