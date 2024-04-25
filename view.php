<?php

include("koneksi.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $status=$_POST['status'];
    $solusi = $_POST['solusi'];

    $result = mysqli_query($mysqli, "UPDATE users SET status='Finished',solusi='$solusi' WHERE id=$id");

    header("Location: Data.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_keluhan = mysqli_fetch_array($result))
{
    $departemen = $user_keluhan['departemen'];
    $status = $user_keluhan['status'];
    $solusi = $user_keluhan['solusi'];
}
?>
<html>
<link rel="stylesheet" href="Edit.css">
<head>
    <title>Edit Customer Service</title>
</head>

<body>
    <div>
    <a href="Data.php">Back</a>
    <br/><br/>

    <form name="update_ticket" method="post" action="view.php">
        <p>Comment: </p>
        <table border="0">
            <tr>
                <td><textarea name="solusi" rows="5" cols="20" value=<?php echo $solusi;?>></textarea></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            </tr>
            <td><input type="submit" name="update" value="kirim solusi"></td>
        </table>
    </form>
    </div>
</body>
</html>