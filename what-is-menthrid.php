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
  <title>What-Is-Menthrid</title>
</head>
<body>
  <?php include 'includes/header.php'; ?>
<!-- Content section -->
<div class="container mt-4">
    <div class="row">
      <!-- Bagian Kiri -->
      <div class="col-md-6" style="padding-right:100px;">
      <h1>What is Menthrid ?</h1>
            <p>Masalah mahasiswa tidak hanya seputar akademis maupun sosial, tetapi juga soal kesehatan mental. Gangguan kesehatan mental pada mahasiswa kerap kali muncul karena adanya tuntutan untuk mulai hidup mandiri dan dapat mengatur segala sesuatunya sendiri.</p>
            <p>Beberapa masalah yang menyangkut kesehatan mental di kalangan mahasiswa di antaranya adalah: Depresi, Gangguan kecemasan, Gangguan makan, Menyakiti diri sendiri, Penyalahgunaan narkoba dan alkohol, Insomnia, serta ADHD</p>
            <p>Menthrid (Mental health Ukrida) merupakan sebuah langkah inovasi sebagai media informasi, konsultasi, dan dukungan mengenai kesehatan mental di kalangan mahasiswa, terkhusus bagi mahasiswa Ukrida.</p>
            <a href="why-menthrid.php" class="btn btn-primary" style="background-color: #EC744A; color: white;">Why Menthrid?</a>
      </div>

      <!-- Bagian Kanan -->
      <div class="col-md-6">
        <img src="assets/WhatIsMenthrid.png" alt="Deskripsi Gambar" class="img-fluid" style="width:400px; height:400px; margin-top:15px">
      </div>
    </div>
</div>

  <?php include 'includes/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>