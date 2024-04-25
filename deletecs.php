<?php

include_once("koneksi.php");

$id_user = $_GET['id_user'];

$result = mysqli_query($mysqli, "DELETE FROM tb_user WHERE id_user=$id_user");

header("Location:CS.php");
?>