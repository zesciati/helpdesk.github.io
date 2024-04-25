<?php
// Create database connection using config file
include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id_user DESC");
?>

<html>
<head>
<title>Helpdesk</title>
<meta name="author" content="Hakko Bio Richard"/>

<link rel="stylesheet" type="text/css" href="datatables/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css"/>
</head>
<body>
<h3><center>Data Ticket Helpdesk</center></h3>
<div class="col-lg-12" style="margin-top: 40px;">

    <table id="lookup" class="table table-bordered table-hover">  
    <thead bgcolor="eeeeee" align="center">
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
            echo"<tr>";
            echo "<td>".$user_keluhan["id"]."</td>";
            echo "<td>".$user_keluhan["id_user"]."</td>";
            echo "<td>".$user_keluhan["tanggal"]."</td>";
            echo "<td>".$user_keluhan["subject"]."</td>";
            echo "<td>".$user_keluhan["departemen"]."</td>";
            echo "<td>".$user_keluhan["keluhan"]."</td>";
            echo "<td>".$user_keluhan["status"]."</td>";
            echo "<td><a href='view_tiket.php?id=$user_keluhan[id]'>View<a></td>";
            echo "<td><a href='delete_tiket.php?id=$user_keluhan[id]'>Delete<a></td>";
            echo"</tr>";
            
          }

        ?>

      </thead>
  </table>
  </div>

  <center><a href="index.php">Kembali</a></center>
  

  <!-- Javascript Libs -->
            <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
            <script type="text/javascript" src="datatables/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="datatables/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
            
            
            <script>
        $(document).ready(function() {
				var dataTable = $('#lookup').DataTable( {
					"processing": true,
					"serverSide": true,
					"ajax":{
						url :"ajax-grid-data.php", // json datasource
						type: "post",  // method  , by default get
						error: function(){  // error handling
							$(".lookup-error").html("");
							$("#lookup").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
							$("#lookup_processing").css("display","none");
							
						}
					}
				} );
			} );
        </script>
</body>
</html>