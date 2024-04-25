<?php
$servername = "localhost";
$database = "db_users";
$username = "root";
$password = "";

$mysqli = mysqli_connect($servername, $username, $password, $database);

if(!$mysqli){
    die("Koneksi Gagal : " . mysqli_connect_error());
}

?>