<?php
include 'header.php';

// Cek apakah ada data dokter_id dan user_id yang diterima dari halaman sebelumnya
if (isset($_POST['dokter_id']) && isset($_POST['user_id'])) {
    $dokter_id = $_POST['dokter_id'];
    $user_id = $_POST['user_id'];
} else {
    // Jika data tidak diterima, kembali ke halaman sebelumnya atau tampilkan pesan error
    echo "Data dokter_id dan user_id tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Pertemuan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/pertemuan.css">
</head>

<body>
<div class="container">
    <h2 class="Judul"><b>Buat Pertemuan</b></h2>
    <div class="card">
        <div class="card-body">
            <form action="#" method="POST">
                <input type="hidden" name="dokter_id" value="<?= $dokter_id ?>">
                <input type="hidden" name="user_id" value="<?= $user_id ?>">
                <div class="form-group">
                    <label for="tanggal">Tanggal Pertemuan:</label>
                    <input type="date" id="tanggal" name="tanggal" required>
                </div>
                <div class="form-group">
                    <label for="jam">Jam Pertemuan:</label>
                    <input type="time" id="jam" name="jam" required>
                </div>
                <div class="form-group">
                    <label for="lama_konsultasi">Lama Konsultasi:</label>
                    <input type="text" id="lama_konsultasi" name="lama_konsultasi" required>
                </div>
                <div class="form-group">
                    <label for="keluhan">Keluhan:</label>
                    <textarea id="keluhan" name="keluhan" rows="4" required></textarea>
                </div>
                <button type="submit" name="buat_pertemuan" class="btn btn-primary" onclick="confirmAndRedirect(this.form)">Buat Pertemuan</button>

            </form>
        </div>
    </div>
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    if (Notification.permission === "granted") {
                new Notification("Pertemuan Berhasil Dibuat", {
                    body: "Kamu sudah membuat pertemuan. Terima kasih!",
                    icon: "notification_icon.png" // Replace with the path to your notification icon
                });
            } else if (Notification.permission !== "denied") {
                Notification.requestPermission().then(function(permission) {
                    if (permission === "granted") {
                        new Notification("Pertemuan Berhasil Dibuat", {
                            body: "Kamu sudah membuat pertemuan. Terima kasih!",
                            icon: "notification_icon.png" // Replace with the path to your notification icon
                        });
                    }
                });
            }
    
</script>


</body>
</html>

<?php 
    include 'footer.php';
?>