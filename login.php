<?php 
// mengaktifkan session pada php
session_start();
if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
        echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
    }
}

include 'koneksi.php';
// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($mysqli,"select * from tb_user where email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
// cek apakah username dan password di temukan pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	session_start();
		$_SESSION['id_user']   = $data['id_user'];
		$_SESSION['email']  = $data['email'];
		$_SESSION['password']  = $data['password'];
		$_SESSION['type'] = $data['type'];
		$_SESSION['nama'] = $data['nama'];
	// cek jika user login sebagai admin
	if($data['type']=="admin"){
		// buat session login dan username
		$_SESSION['email'] = $email;
		$_SESSION['type'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location: admin.php");
	// cek jika user login sebagai pegawai
	}else if($data['type']=="mahasiswa"){
		// buat session login dan username
		$_SESSION['email'] = $email;
		$_SESSION['type'] = "mahasiswa";
		$_SESSION['id_user'] = $result['id_users'];
		// alihkan ke halaman dashboard pegawai
		header("location: helpdesk.html");
    }else if($data['type']=="customer service"){
		// buat session login dan username
		$_SESSION['email'] = $email;
		$_SESSION['type'] = "customer service";
		// alihkan ke halaman dashboard pegawai
		header("location: Data.php");
	}else{
		// alihkan ke halaman login kembali
		header("location: sign.php?pesan=gagal");
	}	

}else{
	header("location:sign.php?pesan=gagal");
}
?>