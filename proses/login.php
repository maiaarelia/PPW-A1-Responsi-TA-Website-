<?php 
session_start();
include '../koneksi.php';

$username = $_POST['username_user'];
$password = $_POST['password_user'];

$cek = mysqli_query($conn, "SELECT * FROM user where username_user = '$username'");
$jml = mysqli_num_rows($cek);
$row = mysqli_fetch_assoc($cek);

if(count($row)>0){
	(password_verify($password, $row['password_user']));
		$_SESSION['username_user'] = $row['nama_user'];
		$_SESSION['user_id'] = $row['user_id'];
		header('location:../index.php');
}else{
	echo "
	<script>
	alert('USERNAME/PASSWORD SALAH');
	window.location = '../user_login.php';
	</script>
	";
	die;
}

?>