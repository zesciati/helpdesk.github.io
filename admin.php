<?php

include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT id_user, nama, email, mobile, type FROM tb_user WHERE type = 'mahasiswa' ORDER BY id_user DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Helpdesk Aquila</title>
    <link rel="stylesheet" href="cs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav class="sidebar">
        <div class="logo-name">
            <div class="logo-image">
                <img src="logo.png" alt="">
            </div>

            <span class="logo_name">Helpdesk</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="admin.php">
                    <i class="fa fa-home"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="cs.php">
                    <i class="fa fa-users"></i>
                    <span class="link-name">Customer Service</span>
                </a></li>
                <li><a href="user.php">
                    <i class="fa fa-user"></i>
                    <span class="link-name">User</span>
                </a></li>
            </ul>

            <ul class="logout-mod">
                <li><a href="logout.php">
                    <i class="fa fa-sign-out"></i>
                    <span class="link-name">Logout</span>
                </a></li>
            </ul>

        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="fa fa-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search here...">
            </div>

        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                <i class="fa fa-dashboard"></i>
                 <span class="text">Dashboard </span>
                </div>
                <?php
                $data_cs = mysqli_query($mysqli, "SELECT * FROM tb_user WHERE type='customer service'");
                $jumlah_cs = mysqli_num_rows($data_cs);
                $data_dp = mysqli_query($mysqli, "SELECT * FROM tb_user WHERE type='mahasiswa'");
                $jumlah_dp = mysqli_num_rows($data_dp);
                ?>
                <div class="boxes">
                    <div class="box box1">
                        <i class="fa fa-user-o"></i><br>
                        <span class="text">Total Customer Service</span>
                        <span class="number"><?php echo $jumlah_cs; ?></span>
                    </div>
                    <div class="box box2">
                        <i class="fa fa-user-o"></i><br>
                        <span class="text">User</span>
                        <span class="number"><?php echo $jumlah_dp; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="admin.js"></script>
</body>
</html>