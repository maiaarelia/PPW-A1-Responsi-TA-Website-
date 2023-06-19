<?php 
include '../koneksi.php';

$hal = $_GET['hal'];
$kode_produk = $_GET['produk_kecantikan'];
if(isset($_GET['jml'])){
	$qty = $_GET['jml'];
}


$result = mysqli_query($conn, "SELECT * FROM produk_kecantikan WHERE id_produk = '$kode_produk'");
$row = mysqli_fetch_assoc($result);

$nama_produk = $row['nama_produk'];
$kd = $row['id_produk'];
$harga = $row['harga_produk'];

if($hal == 1){
	$cek = mysqli_query($conn, "SELECT * from keranjang where id_produk = '$kode_produk'");
	$jml = mysqli_num_rows($cek);
	$row1 = mysqli_fetch_assoc($cek);
	if($jml > 0){
		$set = $row1['qty']+1;
		$update = mysqli_query($conn, "UPDATE keranjang SET qty = '$set' WHERE id_produk = '$kode_produk'");
		if($update){
			echo "
			<script>
			alert('BERHASIL DITAMBAHKAN KE KERANJANG');
			window.location = '../keranjang.php';
			</script>
			";
			die;
		}
	}else{

		$insert = mysqli_query($conn, "INSERT INTO keranjang VALUES('','$kd','$nama_produk', '1', '$harga')");
		if($insert){
			echo "
			<script>
			alert('BERHASIL DITAMBAHKAN KE KERANJANG');
			window.location = '../keranjang.php';
			</script>
			";
			die;
		}
	}


}else{
	$cek = mysqli_query($conn, "SELECT * from keranjang where kode_produk = '$kode_produk'");
	$jml = mysqli_num_rows($cek);
	$row1 = mysqli_fetch_assoc($cek);
	if($jml > 0){
		$set = $row1['qty']+$qty;
		$update = mysqli_query($conn, "UPDATE keranjang SET qty = '$set' WHERE kode_produk = '$kode_produk'");
		if($update){
			echo "
			<script>
			alert('BERHASIL DITAMBAHKAN KE KERANJANG');
			window.location = '../detail_produk.php?produk=".$kode_produk."';
			</script>
			";
			die;
		}
	}else{

		$insert = mysqli_query($conn, "INSERT INTO keranjang VALUES('','$kd','$nama_produk', '$qty', '$harga')");
		if($insert){
			echo "
			<script>
			alert('BERHASIL DITAMBAHKAN KE KERANJANG');
			window.location = '../detail_produk.php?produk=".$kode_produk."';
			</script>
			";
			die;
		}

	}






}


?>