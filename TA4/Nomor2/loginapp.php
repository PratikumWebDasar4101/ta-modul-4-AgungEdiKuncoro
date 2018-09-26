<h1><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login Untuk Belanja</center></h1>
<?php
session_start();

$user = array(
    array("edi","edi"),
    array("agung","agung"),
    array("user","user")
);
?>
<form method="post" align="center">
    <pre>
    Username : <input type="text" name="username" required><br>
    Password : <input type="password" name="password" required><br>
    <input type="submit" value="Masuk">
    </pre>
</form>
<?php
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $_SESSION['username'] = $username;

        $cek = false;
        for ($i=0; $i < count($user); $i++) { 
            if ($user[$i][0] == $username && $user[$i][1]==$password){
                header("location: count.php");
                $cek = true;
            }
        }
        if ($cek == false) {
            ?>
            <script type = "text/javascript">alert("Ups! Something wrong."); location = "loginapp.php";</script>
            <?php
        }
    }
?>