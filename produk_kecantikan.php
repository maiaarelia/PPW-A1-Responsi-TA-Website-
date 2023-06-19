<?php
    include 'header.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/produk_kecantikan.css">
</head>
<body>
<div class="container container10">
    <h2 style="width: 100%; border-bottom: 2px solid #0000; text-align:center; font-size:28px"><b>PRODUK</b></h2>
    <hr>
    <div class="row">
    <div class="col-xs-20 col-sm-20 col-md-20">
            <div class="table-view">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Gambar Produk</th>
                            <th scope="col">Deskripsi Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $result = mysqli_query($conn, "SELECT * FROM produk_kategori_view");
                        while ($row = mysqli_fetch_assoc($result)) { 
                        ?>
                        <tr>
                            <td><?php echo $row['nama_produk']; ?></td>
                            <td><?php echo $row['nama_kategori']; ?></td>
                            <td>
                                <?php if (!empty($row['gambar_produk'])) : ?>
                                    <?php if (file_exists('img/facewash/' . $row['gambar_produk'])) : ?>
                                        <img src="img/facewash/<?php echo $row['gambar_produk']; ?>" style="width: 100px; height: 100px; object-fit: contain;">
                                    <?php endif; ?>
                                    <?php if (file_exists('img/sunscreen/' . $row['gambar_produk'])) : ?>
                                        <img src="img/sunscreen/<?php echo $row['gambar_produk']; ?>" style="width: 100px; height: 100px; object-fit: contain;">
                                    <?php endif; ?>
                                    <?php if (file_exists('img/moisturaizer/' . $row['gambar_produk'])) : ?>
                                        <img src="img/moisturaizer/<?php echo $row['gambar_produk']; ?>" style="width: 100px; height: 100px; object-fit: contain;">
                                    <?php endif; ?>
                                <?php endif; ?>
                            </td>


                            <td><?php echo $row['deskripsi_kategori']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php 
    include 'footer.php';
?>
</body>
</html>



