<html>
<head>
    <title>Add CS</title>
</head>

<body>
    <a href="CS.php">Back</a>
    <br/><br/>

    <form action="addcs.php" method="post" name="form1">
        <table width="100%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Save"></td>
            </tr>
        </table>
    </from>

    <?php

    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        include_once("koneksi.php");

        $result = mysqli_query($mysqli, "INSERT INTO tb_user(nama,mobile,email,password) VALUES('$nama','$mobile','$email','$password')");

        echo "Customer Service added successfully. <a href='CS.php'>View List Customer Service</a>";
    }
    ?>
</body>
</html>