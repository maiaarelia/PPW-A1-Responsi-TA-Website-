<?php 
session_start();
include 'koneksi.php';
if(isset($_SESSION['kd_cs'])){
	$kode_cs = $_SESSION['kd_cs'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LeBeaute</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/css_header.css">
    <style>
    	/* Add sticky CSS styles */
		.navbar {
			position: sticky;
			top: 0;
            z-index: 1000;
		}
    </style>
</head>
<body>
	<nav class="navbar navbar-default sticky-top" style="padding: 5px; background-color: #89cff0;">
		<div class="container" style="background-color: #5ba3c4; border-radius: 10px;">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" style="color: black"><b>LeBeaute</b></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php" style="color: white;">Dashboard</a></li>
					<li><a href="produk_kecantikan.php" style="color: white;">Produk</a></li>
                    <li><a href="flasesale.php" style="color: white;">Flash Sale</a></li>
					<li><a href="about.php" class="about" style="color: white;">Tentang Kami</a></li>
					<li><a href="janjidokter.php" style="color: white;">Janji Dokter</a></li>
					<?php 
					if(isset($_SESSION['user_id'])){
					$kode_cs = $_SESSION['user_id'];
					$cek = mysqli_query($conn, "SELECT id_produk from keranjang where user_id = '$kode_cs' ");
					$value = mysqli_num_rows($cek);
						?>
						<li><a href="keranjang.php"><i style="color: white;" class="glyphicon glyphicon-shopping-cart" style="color: white;"></i> <b>[ <?= $value ?> ]</b></a></li>
						<?php 
					}else{
						echo "<li><a href='keranjang.php'><i class='glyphicon glyphicon-shopping-cart'></i> [0]</a></li>";
					}
					if(!isset($_SESSION['user_id'])){
						?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" style="color: white;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> Akun <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="user_login.php">Login</a></li>
								<li><a href="register.php">Register</a></li>
							</ul>
						</li>
						<?php 
					}else{
						?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> <?= $_SESSION['user_id']; ?> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="proses/logout.php">Log Out</a></li>
							</ul>
						</li>
						<?php 
					}
					?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
	</nav>
</body>
</html>
