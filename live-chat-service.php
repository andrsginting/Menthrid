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
  <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="b7ee4b0a-8cba-4737-bf65-3394c524acf3";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
  <title>Live-Chat-Service</title>
</head>
<body>
  <?php include 'includes/header.php'; ?>
<!-- Content section -->
<div class="container mt-4">
    <div class="row">
      <!-- Bagian Kiri -->
      <div class="col-md-6" style="padding-right:100px;">
      <h1>Live Chat Service</h1>
            <p>Dengan berkembangnya teknologi saat ini, kami menyediakan inovasi dengan menyediakan fitur Live Chat Service untuk mempermudah proses konsultasi apabila tidak dapat bertemu langsung.</p>
            <p>Anda dapat mengklik icon Message di pojok kanan bawah pada halaman ini, untuk memulai Live Chat Service. Anda dapat memasukkan nama (dapat disamarkan), usia, dan keluhan/kebutuhan anda.</p>
            <p>Para fasilitator kami siap membalas pesan anda selama jam kerja berlangsung pada Jam 08.00 - 20.00 WIB. Ini adalah salah satu fitur unggulan kami untuk membantu Anda secara cepat dan efisien memahami kebutuhan kesehetan mental.</p>
            <a href="on-site-service.php" class="btn btn-primary" style="background-color: #EC744A; color: white;">On Site Service</a>
      </div>

      <!-- Bagian Kanan -->
      <div class="col-md-6">
        <img src="assets/live-chat-service.png" alt="Deskripsi Gambar" class="img-fluid" style="width:auto; height:400px; margin-top:40px;">
      </div>
    </div>
</div>

  <?php include 'includes/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>