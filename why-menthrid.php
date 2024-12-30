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
  <title>Why-Menthrid</title>
</head>
<body>
  <?php include 'includes/header.php'; ?>
<!-- Content section -->
<div class="container mt-4">
    <div class="row">
      <!-- Bagian Kiri -->
      <div class="col-md-6" style="padding-right:100px;">
      <h1>Why Menthrid ?</h1>
            <p>Menthrid (Mental health Ukrida) hadir sebagai teman, sahabat, dan keluarga untuk menampung segala permasalahan dan dukungan kesehatan mental. Kami menyediakan layanan konsultasi melalui Live  Chat serta Onsite dengan datang ke tempat konsultasi yang kami sediakan.</p>
            <p>Konsultasi dilakukan dengan para ahli psikologis di bidang kesehatan yang sudah ahli dan terverifikasi untuk menyediakan pengobatan dan dukungan kesehatan mental yang baik dan berkompeten.</p>
            <p>Besar harapan kami, melalui inovasi ini, permasalahan kesehatan mental yang di alami mahasiswa terkhususnya di Ukrida dapat diselesaikan, sehingga menciptakan sumber daya yang unggul dan sehat mental untuk bekal di masa depan.</p>
            <a href="live-chat-service.php" class="btn btn-primary" style="background-color: #EC744A; color: white;">Live Chat Service</a>
      </div>

      <!-- Bagian Kanan -->
      <div class="col-md-6">
        <img src="assets/why-menthrid.png" alt="Deskripsi Gambar" class="img-fluid" style="width:auto; height:300px; margin-top:40px;">
      </div>
    </div>
</div>

  <?php include 'includes/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>