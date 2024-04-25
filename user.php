<?php
// Create database connection using config file
include_once("koneksi.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT id_user, nama, email, mobile, type FROM tb_user WHERE type = 'mahasiswa' ORDER BY id_user DESC");
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
                <i class="fa fa-user"></i>
                 <span class="text">Data User </span>
                </div>

            </div>


        <body>
            <div class="activity">
                
                <div class="activity-data">
                    <div class="data names">

                    <table width='320%' border=1>

                    <link rel="stylesheet" href="style.css">

                    <h3>Data Keluhan</h3>
 
             <tr>
                    <th>Id User</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Mobile</th>
            </tr>
            <?php  
                while($user_keluhan = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$user_keluhan["id_user"]."</td>";
                echo "<td>".$user_keluhan["nama"]."</td>";
                echo "<td>".$user_keluhan["email"]."</td>";
                echo "<td>".$user_keluhan["mobile"]."</td>";  
                echo "</tr>";
            }
                ?>
            </table>
            <script src="admin.js"></script>
         </body>
        </html>