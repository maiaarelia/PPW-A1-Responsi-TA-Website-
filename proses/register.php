<?php 
include '../koneksi.php';
$id = mysqli_query($conn, "SELECT user_id from user order by user_id desc");
$data = mysqli_fetch_assoc($id);
$num = substr($data['user_id'], 1, 4);
$add = (int) $num + 1;
if(strlen($add) == 1){
	$format = "U0000".$add;
}else if(strlen($add) == 2){
	$format = "U000".$add;
}else if(strlen($add) == 3){
	$format = "U00".$add;
}else if(strlen($add) == 4){
	$format = "U0".$add;
}else{
	$format = "U".$add;
}

$nama = $_POST['nama_user'];
$username = $_POST['username_user'];
$password = $_POST['password_user'];
$email = $_POST['email_user'];
$tlp = $_POST['notelp_user'];
$konfirmasi = $_POST['konfirmasi'];

$hash = password_hash($password, PASSWORD_DEFAULT);

if($password == $konfirmasi){
	$cek = mysqli_query($conn, "SELECT username_user from user where username_user = '$username'");
	$jml = mysqli_num_rows($cek);
	if($jml == 1){
		echo "
		<script>
		alert('USERNAME SUDAH DIGUNAKAN');
		window.location = '../register.php';
		</script>
		";
		die;
	}

	$result = mysqli_query($conn, "INSERT INTO user VALUES('$format','$nama', '$username', '$hash', '$tlp','$email')");
	if($result){
		echo "
		<script>
		alert('REGISTER BERHASIL');
		window.location = '../user_login.php';
		</script>
		";
	}

}else{
	echo "
	<script>
	alert('KONFIRMASI PASSWORD TIDAK SAMA');
	window.location = '../register.php';
	</script>
	";
}
?>