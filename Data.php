<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Helpdesk Aquila</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="cs.css">
    <style type="text/css">
        .table-hover { 
        width: 100%; 
        border: 1;
        border-collapse: collapse; 
        }

        tr:nth-of-type(odd) { 
        background: #eee; 
        }
        th { 
        background: #333; 
        color: white; 
        font-weight: bold; 
        }
        td, th { 
        padding: 6px; 
        border: 1px solid #ccc; 
        text-align: ; 
        }

        tr:hover {
        background-color: lightyellow;
        }
    </style>
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
                <li><a href="#">
                    <i class="fa fa-home"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="add.php">
                    <i class="fa fa-user-o"></i>
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
                $data_cus = mysqli_query($mysqli, "SELECT * FROM tb_user WHERE type='mahasiswa'");
                $jumlah_cus = mysqli_num_rows($data_cus);
                $data_keluhan = mysqli_query($mysqli, "SELECT * FROM users");
                $jumlah_keluhan = mysqli_num_rows($data_keluhan);
                ?>
                <div class="boxes">
                    <div class="box box1">
                        <i class="fa fa-user-o"></i><br>
                        <span class="text">Total Customer</span>
                        <span class="number"><?php echo $jumlah_cus; ?></span>
                    </div>
                    <div class="box box1">
                        <i class="fa fa-list-alt"></i><br>
                        <span class="text">Total Keluhan</span>
                        <span class="number"><?php echo $jumlah_keluhan; ?></span>
                    </div>
                </div>
            </div>

        <body>
            <div class="activity">
                <div class="title">
                    <i class="fa fa-clock-o"></i>
                    <span class="text">Recent Activity</span>
                </div>
                


                    <table class="table table-hover">

                    <link rel="stylesheet" href="style.css">

                    <h3>Data Keluhan</h3>
 
                    <tr>
                        <th>Id Tiket</th>
                        <th>Id User</th>
                        <th>Tanggal</th>
                        <th>Subject</th>
                        <th>Departemen</th>
                        <th>Keluhan</th>
                        <th>Status</th>
                        <th>Solusi</th>
				        <th>Action</th>
                    </tr>
                    <?php  
                        while($user_keluhan = mysqli_fetch_array($result)) {         
                        echo "<tr>";
                        echo "<td>".$user_keluhan["id"]."</td>";
                        echo "<td>".$user_keluhan["id_user"]."</td>";
                        echo "<td>".$user_keluhan["tanggal"]."</td>";
                        echo "<td>".$user_keluhan["subject"]."</td>";
                        echo "<td>".$user_keluhan["departemen"]."</td>";
                        echo "<td>".$user_keluhan["keluhan"]."</td>";  
                        echo "<td>".$user_keluhan["status"]."</td>";
                        echo "<td><a href='view.php?id=$user_keluhan[id]'>view</a> | <a href='view.php?id=$user_keluhan[id]'>Edit</a></td>"; 
                        echo "<td><a href='edit.php?id=$user_keluhan[id]' class='btn-update'>Edit</a> | <a href='delete.php?id=$user_keluhan[id]' class='btn-delete'>Delete</a></td></tr>";     
                    }
                    ?>
                    </table>
    </section>
    <script src="admin.js"></script>
    <a href="add.php"></a><br/><br/>
</body>
</html>
