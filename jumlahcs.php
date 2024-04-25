<?php
    include_once("koneksi.php");

    $data_cs = mysqli_query($mysqli, "SELECT * FROM users WHERE type='customer service'");

    $jumlah_cs = mysqli_num_rows($data_cs);


?>