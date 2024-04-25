<?php

include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM tb_user WHERE type = 'customer service'ORDER BY id_user DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        .table-hover { 
        width: 100%; 
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
    <title>Admin CS</title>
    <link rel="stylesheet" href="CSShelpdesk.css">
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
                <li><a href="#">
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
                <i class="fa fa-users"></i>
                 <span class="text">Customer Service </span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="fa fa-user-o"></i><br>
                        <a href="addcs.php">Add Customer Service</a>
                    </div>
                </div>
                <div class="title">
                    <i class="fa fa-users"></i>
                    <span class="text">List Customer Service </span>
                </div>
                        <table class="table table-hover">

                        <tr>
                            <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Password</th> <th>Action</th>
                        </tr>
                        <?php
                        while($data_cs = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>".$data_cs['nama']."</td>";
                            echo "<td>".$data_cs['mobile']."</td>";
                            echo "<td>".$data_cs['email']."</td>";
                            echo "<td>".$data_cs['password']."</td>";

                            echo "<td><a href='editcs.php?id_user=$data_cs[id_user]'>Edit</a>  |  <a href='deletecs.php?id_user=$data_cs[id_user]'>Delete</a></td></tr>";
                        }
                        ?>
                        </table>
                    </div>
                </div>
    </section>

    <script src="admin.js"></script>
</body>
</html>