<?php 
include 'header.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleanser</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/css_cleanser.css">
    <style>
        .product-action .btn {
  background-color: #5ba3c4;
  color: #fff;
  border-radius: 5px;
  padding: 8px 16px;
  padding-bottom: 10px; /* Tambahkan properti padding-bottom */
  font-size: 14px;
  border: none;
  cursor: pointer;
}

.product-action .btn:hover {
  background-color: #ff6b9b;
}

/* Styles for the link */
.product-action a {
  color: #337ab7;
  text-decoration: none;
}

.product-action a:hover {
  text-decoration: underline;
}

  
.product-action .btn {
  /* Properti CSS lainnya */
  margin-top: 10px; /* Tambahkan margin-top untuk memberi ruang antara tombol */
}

/* Atau gunakan padding jika ingin memberi ruang internal pada tombol */
.product-action .btn {
  /* Properti CSS lainnya */
  padding-top: 10px; /* Tambahkan padding-top untuk memberi ruang antara tombol */
}




    </style>

</head>
<body>
    <div class="container">
        <h2 class="Judul-Kategori"><b>Produk Sunscreen</b></h2>
        <div class="row">
        <?php 
            $result = mysqli_query($conn, "SELECT * FROM produk_kecantikan WHERE id_kategori = 'SNSCREN003'");
            $count = 0; // Untuk menghitung jumlah card dalam satu baris
            while ($row = mysqli_fetch_assoc($result)) {
                $quantity = number_format($row['KUANTITAS_PRODUK'], 0, ',', '.');
                $price = number_format($row['HARGA_PRODUK'], 0, ',', '.');
        ?>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-img-container">
                        <img src="img/sunscreen/<?= $row['GAMBAR_PRODUK']; ?>" style="width: 200px;">
                    </div>
                    <div class="card-body">
                        <div class="star text-center">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <h3><?= $row['NAMA_PRODUK']; ?></h3>
                        <div class="product-quantity">
                            <span class="quantity-label">Qty:</span>
                            <span class="quantity-value"> <?= $quantity; ?></span>
                        </div>
                        <div class="product-price">
                            <span class="price-label">Harga:</span>
                            <span class="price-value">Rp <?= $price; ?></span>
                        </div>
                        <div class="product-action">
                            <form action="keranjang.php" method="POST">
                                <input type="hidden" name="product_name" value="<?= $row['NAMA_PRODUK']; ?>">
                                <input type="hidden" name="product_price" value="<?= $row['HARGA_PRODUK']; ?>">
                                <button type="submit" name="add_to_cart" class="btn btn-primary">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php 
            }
        ?>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php 
    include 'footer.php';
?>