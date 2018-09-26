<?php
session_start();
?>
<form method="post">
    <pre>   
        Daftar Barang :
            <input type="checkbox" name="barang[]" value="Mouse">Mouse
            <input type="checkbox" name="barang[]" value="Laptop">Laptop
            <input type="checkbox" name="barang[]" value="Monitor">Monitor
            <input type="checkbox" name="barang[]" value="RAM">RAM
            <input type="checkbox" name="barang[]" value="Keyboard">Keyboard

        Jenis Pengiriman :
            <input type="radio" name="pengiriman" value="JNE">JNE
            <input type="radio" name="pengiriman" value="JNT">JNT
            <input type="radio" name="pengiriman" value="Grab">Grab
            <input type="radio" name="pengiriman" value="Gojek">Gojek

        Alamat Pengiriman :
            <input type="text" name="alamat" required>

            <input type="submit" value="Kirim">
    </pre>
</form>
<?php
if (isset($_POST['alamat'])) {
    $barang     = $_POST['barang'];
    $pengiriman = $_POST['pengiriman'];
    $alamat     = $_POST['alamat'];
    $tgl        = date('d M Y');
    $biaya_kirim = 0;
    $biaya_total = 0;
    $harga = 0;
    $harga_total = 0;
    $_SESSION['alamat'] = $alamat;
    
    for ($i=0; $i < count($barang); $i++) { 
        if ($barang[$i] == "Mouse") {
           $harga =  200000;
        }elseif ($barang[$i] == "Laptop") {
            $harga = 2000000;
        }elseif ($barang[$i] == "Monitor") {
            $harga = 1000000;
        }elseif ($barang[$i] == "RAM") {
            $harga = 700000;
        }else{
            $harga = 800000;
        }
        $harga_total = $harga_total + $harga;
    }

    if ($pengiriman == "JNE") {
        $biaya_kirim = 11000;
    }elseif($pengiriman == "JNT"){
        $biaya_kirim = 12000;
    }elseif($pengiriman == "Grab"){
        $biaya_kirim = 15000;
    }else {
        $biaya_kirim = 14000;
    }
    $biaya_total = $harga_total + $biaya_kirim;
?>
<pre>
    Tanggal Pengiriman  :
        <?php echo $tgl; ?>
    
    Data Pelanggan      :
        Nama    : <?php echo $_SESSION['username']; ?>

        Alamat  : <?php echo $_SESSION['alamat'];?>

    Barang Dibeli       : 
        <?php
            foreach ($barang as $key) {
                echo $key.", ";
            }
        ?>

    Jenis Pengiriman    :
            <?php echo $pengiriman." (Rp. ".number_format($biaya_kirim).")"?>
    
    Total Harga         :
            <?php
                echo number_format($biaya_total);
            ?>
</pre>
<?php } ?>