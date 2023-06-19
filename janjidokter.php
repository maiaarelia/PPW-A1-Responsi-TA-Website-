<?php 
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Janji Dokter</title>
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
    <h2 class="Judul-Kategori"><b>Janji Dokter</b></h2>
    <div class="row">
    <?php 
        $result = mysqli_query($conn, "SELECT nama_dokter, jam_kerja, gambar_dokter, spesialis FROM dokter_kecantikan");
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['nama_dokter'];
            $schedule = $row['jam_kerja'];
            $spesialis = $row['spesialis'];
    ?>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-img-container">
                    <img src="img/dokter/<?= $row['gambar_dokter']; ?>" style="width: 200px;">
                </div>
                <div class="card-body">
                    <div class="star text-center">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <h3><?= $name; ?></h3>
                    <div class="product-quantity">
                        <span class="quantity-label">Spesialis:</span>
                        <span class="quantity-value"><?= $spesialis; ?></span>
                    </div>
                    <p><?= $schedule; ?></p>
                    <div class="product-action">
                        <form action="buat_pertemuan.php" method="POST">
                            <input type="hidden" name="dokter_id" value="<?= $dokter_id ?>">
                            <input type="hidden" name="user_id" value="<?= $user_id ?>">
                            <button type="submit" href="buat_pertemuan.php" name="buat_pertemuan" class="btn btn-primary" onclick="confirmAndRedirect('<?= $name; ?>')">Buat Pertemuan</button>

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

<script>
    // Function to show confirmation dialog and redirect to the next page
    function confirmAndRedirect(doctorName) {
        // Show a confirmation dialog
        var confirmation = confirm("Are you sure you want to create a consultation with " + doctorName + "?");

        // Proceed to the next page if the user confirms
        if (confirmation) {
            // Redirect to the next page
            window.location.href = "buat_pertemuan.php"; // Replace "next_page.php" with the actual URL of the next page
        } else {
            window.location.href = "janjidokter.php";
        }
    }
</script>


</body>
</html>

<?php 
    include 'footer.php';
?>
