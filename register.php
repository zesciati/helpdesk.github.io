<?php

require 'koneksi.php';
$nama = $_POST["nama"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$password = $_POST["password"];
$type = $_POST["type"];

$query_sql = "INSERT INTO tb_user (nama, email, mobile, password, type) VALUES ('$nama', '$email', '$mobile', '$password', '$type')";

if(mysqli_query($mysqli, $query_sql)){
    header("Location: sign.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($mysqli);
}

?>