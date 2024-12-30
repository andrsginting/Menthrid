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
  <title>Apa itu Mental Health?</title>
</head>
<body>
  <?php include 'includes/header.php'; ?>
<!-- Content section -->
<div class="container mt-4">
    <div class="row">
      <!-- Bagian Kiri -->
      <div class="col-lg-6">
      <h1>Apa itu Mental Health ?</h1>
            <p>Kesehatan mental merujuk pada kondisi kesejahteraan emosional, psikologis, dan sosial seseorang. Ini mencakup kemampuan seseorang untuk mengelola stres, berinteraksi dengan orang lain, membuat keputusan, dan mengatasi tantangan dalam hidup. Kesehatan mental sangat penting untuk kualitas hidup yang baik dan dapat memengaruhi bagaimana seseorang berpikir, merasa, dan bertindak.</p>
            <p>Beberapa faktor yang dapat memengaruhi kesehatan mental melibatkan kombinasi genetik, lingkungan, kehidupan sehari-hari, dan pengalaman hidup. Gangguan kesehatan mental, seperti depresi, kecemasan, gangguan makan, atau skizofrenia, dapat mempengaruhi pikiran dan perilaku seseorang.</p>
            <p>Penting untuk diingat bahwa kesehatan mental tidak hanya tentang tidak adanya gangguan mental. Orang yang memiliki kesehatan mental yang baik mungkin tetap mengalami stres dan tantangan, tetapi mereka memiliki kemampuan untuk mengelola dengan efektif dan tetap berfungsi sehari-hari.</p>
            <p>Merawat kesehatan mental melibatkan berbagai pendekatan, termasuk dukungan sosial, manajemen stres, olahraga, istirahat yang cukup, serta mungkin terapi atau konseling. Penting juga untuk mengurangi stigma seputar masalah kesehatan mental sehingga orang merasa nyaman mencari bantuan jika diperlukan.</p>
            <a href="mental-health-penting.php" class="btn btn-primary" style="background-color: #EC744A; color: white;">Mental Health Penting?</a>
      </div>

      <!-- Bagian Kanan -->
      <div class="col-md-6">
        <img src="assets/what-is-menta-health.png" alt="Deskripsi Gambar" class="img-fluid" style="width:auto; height:400px; margin-top:40px;">
      </div>
    </div>
</div>

  <?php include 'includes/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>