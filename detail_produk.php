<?php 
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Produk</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
	<style>
        * {
            font-family: 'Poppins', sans-serif;
        }

		.thumbnail img {
			width: 400px;
		}

		.product-title {
			color: #337ab7;
			font-weight: bold;
			font-size: 24px;
		}

		.product-price {
			font-weight: bold;
			color: #337ab7;
			font-size: 20px;
			margin-bottom: 20px;
		}

		.product-description {
			font-size: 16px;
			line-height: 1.6;
			margin-bottom: 20px;
		}

		.btn-add-to-cart {
			background-color: #337ab7;
			color: #fff;
			border: none;
			padding: 10px 20px;
			font-size: 16px;
			border-radius: 5px;
			margin-right: 10px;
		}

		.btn-back-shopping {
			background-color: #f0ad4e;
			color: #fff;
			border: none;
			padding: 10px 20px;
			font-size: 16px;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2 style="width: 100%; border-bottom: 4px solid #337ab7;"><b>Detail Produk</b></h2>

		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="img/facewash/azarinecleanser.png" width="400">
				</div>
			</div>

			<div class="col-md-8">
				<form action="proses/add.php" method="GET">
					<input type="hidden" name="user_id" value="123">
					<input type="hidden" name="produk_kecantikan" value="produk_id">
					<input type="hidden" name="hal" value="2">
					<table class="table table-striped">
						<tbody>
							<tr>
								<td><b>Nama</b></td>
								<td class="product-title">Azarine Cleanser</td>
							</tr>
							<tr>
								<td><b>Harga</b></td>
								<td class="product-price">Rp. 31.500</td>
							</tr>
							<tr>
								<td><b>Deskripsi</b></td>
								<td class="product-description">Deskripsi produk</td>
							</tr>
							<tr>
								<td><b>Jumlah</b></td>
								<td><input class="form-control" type="number" min="1" name="jml" value="1" style="width: 155px;"></td>
							</tr>
						</tbody>
					</table>
					<button type="submit" class="btn btn-add-to-cart"><i class="glyphicon glyphicon-shopping-cart"></i> Tambahkan ke Keranjang</button>
					<a href="produk_kecantikan_cleanser.php" class="btn btn-back-shopping"> Kembali Belanja</a>
				</form>
			</div>
		</div>
	</div>
	<br>
	<br>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php 
    include 'footer.php';
?>
