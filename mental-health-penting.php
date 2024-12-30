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
  <title>Mental-Health-Penting</title>
</head>
<body>
  <?php include 'includes/header.php'; ?>
<!-- Content section -->
<div class="container mt-4">
    <div class="row">
      <!-- Bagian Kiri -->
      <div class="col-lg-6">
      <h1>Mental Health Penting?</h1>
            <p>Kesehatan mental memiliki peran yang sangat penting dalam menjaga keseimbangan dan kesejahteraan keseluruhan seseorang. Pertama-tama, kesehatan mental mempengaruhi secara langsung kualitas hidup individu. Orang dengan kesehatan mental yang baik cenderung memiliki sikap positif terhadap kehidupan, lebih mampu menanggapi tantangan dengan bijak, dan menikmati hubungan yang sehat. Kesehatan mental yang baik juga berdampak positif pada fungsi kognitif, memungkinkan seseorang untuk berkonsentrasi, mengambil keputusan, dan memecahkan masalah dengan lebih efektif.</p>
            <p>Selain itu, kesehatan mental membentuk dasar untuk kinerja optimal dalam berbagai aspek kehidupan. Di tempat kerja, misalnya, karyawan dengan kesehatan mental yang baik cenderung lebih produktif, kreatif, dan dapat beradaptasi dengan perubahan. Kesehatan mental yang terjaga juga berperan dalam membangun hubungan interpersonal yang kuat dan mendukung, membantu menciptakan lingkungan sosial yang positif dan memperkuat dukungan emosional.</p>
            <p>Pentingnya kesehatan mental juga terletak pada perannya sebagai faktor pencegahan terhadap gangguan kesehatan mental. Merawat kesehatan mental dengan memahami dan mengelola stres, menjaga keseimbangan antara pekerjaan dan kehidupan pribadi, serta mencari dukungan ketika diperlukan dapat mengurangi risiko mengalami gangguan seperti depresi atau kecemasan. Oleh karena itu, kesadaran akan kesehatan mental dan upaya untuk menjaganya tidak hanya memengaruhi kehidupan individu secara langsung tetapi juga memberikan kontribusi pada masyarakat yang lebih sehat secara keseluruhan.</p>
            <a href="kenali-diri-anda.php" class="btn btn-primary" style="background-color: #EC744A; color: white;">Kenali Diri Anda!</a>
      </div>

      <!-- Bagian Kanan -->
      <div class="col-md-6">
        <img src="assets/mental-health-penting.png" alt="Deskripsi Gambar" class="img-fluid" style="width:auto; height:400px; margin-top:40px;">
      </div>
    </div>
</div>

  <?php include 'includes/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>