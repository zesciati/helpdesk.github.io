<html>
<link rel="stylesheet" href="ViewTiket.css">
<head> 
</head>
    <body>
        <div>
    <?php
    include_once("koneksi.php");

    $id = $_GET['id'];
    
    $result = mysqli_query($mysqli, "SELECT solusi FROM users  WHERE id=$id");

    while($user_keluhan = mysqli_fetch_array($result)) {
        echo "<h1>Our Answer: </h1><br/>";
        echo wordwrap($user_keluhan["solusi"],30,"<br>\n",TRUE);
    }
?>
    <center><a href="datatiket.php">Kembali</a></center>
    </div>
    </body>
</html>
