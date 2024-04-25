<?php

include("koneksi.php");

if(isset($_POST['update']))
{
    $id_user = $_POST['id_user'];

    $nama = $_POST['nama'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($mysqli, "UPDATE tb_user SET nama='$nama',mobile='$mobile',email='$email',password='$password' WHERE id_user=$id_user");

    header("Location: CS.php");
}
?>
<?php

$id_user = $_GET['id_user'];

$result = mysqli_query($mysqli, "SELECT * FROM tb_user WHERE id_user=$id_user");

while($data_cs = mysqli_fetch_array($result))
{
    $nama = $data_cs['nama'];
    $mobile = $data_cs['mobile'];
    $email = $data_cs['email'];
    $password = $data_cs['password'];
}
?>
<html>
<head>
    <title>Edit Customer Service</title>
</head>

<body>
    <a href="CS.php">Back to CS</a>
    <br/><br/>

    <form name="update_cs" method="post" action="editcs.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value=<?php echo $password;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_user" value=<?php echo $_GET['id_user'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>