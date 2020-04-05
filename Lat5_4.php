<?php
$mysqli = new mysqli('localhost', 'root', '', 'user');
$rs = $mysqli->query("CALL SP_Login('$_POST[username]', '$_POST[password]')");

$row = $rs->fetch_object();

if ($row) {
    header("location: Lat5_1.php");
} else {
    echo "Data tidak terdaftar";
    header('location: formLogin.html');
}
