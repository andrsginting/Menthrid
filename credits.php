<?php
session_start();
include 'config.php';

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'member') {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/home2.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <title>Credits</title>
</head>
<body>
  <?php include 'includes/header.php'; ?>
<!-- Content section -->
<div class="container mt-4">
    <div class="row">
      <!-- Bagian Kiri -->
      <div class="col-lg-6">
      <h1>Credits</h1>
            <p>Nama saya Andreas Nicolas Ginting, seorang mahasiswa Informatika di Kampus Ukrida, dengan NIM 412022021. Saya mengembangkan platform ini sebagai pemenuhan project mata kuliah Pemrograman Web 2, serta upaya untuk meningkatkan pemahaman dan dukungan terhadap kesehatan mental di kalangan mahasiswa. Dengan menggabungkan pengetahuan informatika dan kepekaan terhadap isu kesehatan mental, saya berkomitmen untuk memberikan sumber daya dan informasi yang bermanfaat, menciptakan ruang virtual yang mendukung dan membantu mengatasi masalah kesehatan mental.</p>
            <p>Website ini merupakan hasil dedikasi dan komitmen saya dalam menyediakan sumber daya yang berharga bagi kampus Ukrida. Dengan desain yang ramah pengguna dan konten informatif, saya berharap bahwa website ini dapat menjadi tempat yang aman bagi mahasiswa untuk mendapatkan informasi, dukungan, dan bimbingan terkait kesehatan mental. </p>
            <a href="contact-us.php" class="btn btn-primary" style="background-color: #EC744A; color: white;">Contact Us</a>
      </div>

      <!-- Bagian Kanan -->
      <div class="col-md-6">
        <img src="assets/credits.png" alt="Deskripsi Gambar" class="img-fluid" style="width:auto; height:600px;">
      </div>
    </div>
</div>

  <?php include 'includes/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>