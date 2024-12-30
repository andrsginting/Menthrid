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
  <title>Kenali Diri Anda!</title>
</head>
<body>
  <?php include 'includes/header.php'; ?>
<!-- Content section -->
<div class="container mt-4">
    <div class="row">
      <!-- Bagian Kiri -->
      <div class="col-lg-6">
      <h1>Kenali Diri Anda</h1>
            <p>Mengenali diri sendiri adalah perjalanan yang melibatkan refleksi dan introspeksi yang mendalam terhadap berbagai aspek diri. Pertama, luangkan waktu untuk merenung tentang nilai-nilai, kepercayaan, dan tujuan hidup Anda. Pertanyakan diri Anda tentang apa yang benar-benar penting bagi Anda dan apa yang memberikan makna dalam hidup Anda. Pemahaman ini dapat membantu Anda mengidentifikasi arah hidup yang sesuai dengan nilai-nilai inti Anda, memberikan landasan yang kuat untuk pengembangan pribadi.</p>
            <p>Selanjutnya, jadikan kesadaran emosional sebagai bagian integral dari perjalanan ini. Perhatikan perasaan Anda, tanpa menilai atau menekan emosi yang muncul. Mengetahui dan memahami emosi Anda membantu Anda mengelola stres dengan lebih efektif. Pada saat yang sama, ini membantu membentuk kemampuan resiliensi mental, memungkinkan Anda untuk menghadapi tantangan dengan lebih baik.</p>
            <p>Kaitannya dengan kesehatan mental sangat kuat. Mengenali diri sendiri memungkinkan Anda untuk hidup sesuai dengan tujuan dan nilai-nilai pribadi Anda, mengurangi konflik internal, dan meningkatkan kepuasan hidup. Kesadaran diri juga berperan dalam mencegah dan mengelola gangguan kesehatan mental. Dengan mengenali tanda-tanda stres atau kecemasan, Anda dapat mengambil langkah-langkah preventif atau mencari dukungan ketika diperlukan. Oleh karena itu, melalui upaya terus-menerus untuk mengenali diri sendiri, Anda dapat membangun fondasi kesehatan mental yang kuat dan berkelanjutan.</p>
            <a href="motivasi-diri.php" class="btn btn-primary" style="background-color: #EC744A; color: white;">Motivasi Diri</a>
      </div>

      <!-- Bagian Kanan -->
      <div class="col-md-6">
        <img src="assets/kenali-diri-anda.png" alt="Deskripsi Gambar" class="img-fluid" style="width:auto; height:400px; margin-top:40px;">
      </div>
    </div>
</div>

  <?php include 'includes/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>