<h1><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Silahkan Login</center></h1>
<?php
session_start();

$akun = array(
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
        for ($i=0; $i < count($akun); $i++) { 
            if ($akun[$i][0]==$username && $akun[$i][1]==$password){
                    header("location: pengisian.php");
            }
        }
            ?>
            <script type = "text/javascript">alert("Ups! Something wrong.");</script>
            <?php
        }
?>