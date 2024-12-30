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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script src="script/script.js"></script>
  <title>Contact-Us</title>
</head>
<body>
  <?php include 'includes/header.php'; ?>
<!-- Content section -->

<div class="container mt-4">
    <div class="row">
      <!-- Bagian Kiri -->
      <div class="col-lg-6">
      <h1>Contact Us</h1>
            <p>Kamu dapat berkomunikasi dengan kami melalui:</p>
        <!-- Icon sosial media -->
          <div class="social-icons" id="contact" style="margin-bottom:10px;">
            <a href="https://www.facebook.com/kampusukrida/" class="bi bi-facebook" title="Facebook"></a>
            <a href="https://www.instagram.com/kampusukrida/" class="bi bi-instagram" title="Instagram"></a>
            <a href="mailto:humas@ukrida.ac.id" class="bi bi-envelope" title="Gmail"></a>
            <a href="https://twitter.com/ukrida" class="bi bi-twitter" title="Twitter"></a>
          </div>
          <a href="home.php" class="btn btn-primary" style="background-color: #EC744A; color: white;">Home</a>
          <!-- Formulir Penilaian -->
            <h2 class="review">Review Our Service</h2>
            <form id="reviewForm" action="save_review.php" method="post">
              <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
              </div>
              <div class="form-group">
                <label for="domisili">Domisili:</label>
                <input type="text" class="form-control" id="domisili" name="domisili" required>
              </div>
              <div class="form-group">
                <label for="kesan">Kesan terhadap Menthrid:</label>
                <input type="text" class="form-control" id="kesan" name="kesan" required>
              </div>
              <div class="form-group">
                <label for="pesan">Pesan/Masukan untuk Menthrid:</label>
                <textarea class="form-control" id="pesan" rows="4" name="pesan" required></textarea>
              </div>
              <div class="form-group">
                <label for="penilaian">Penilaian untuk Menthrid:</label>
                <select class="form-control" id="penilaian" name="penilaian" required>
                  <option value="1">⭐</option>
                  <option value="2">⭐⭐</option>
                  <option value="3">⭐⭐⭐</option>
                  <option value="4">⭐⭐⭐⭐</option>
                  <option value="5">⭐⭐⭐⭐⭐</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          
      </div>

      <!-- Bagian Kanan -->
      <div class="col-md-6">
        <img src="assets/contact-us.png" alt="Deskripsi Gambar" class="img-fluid" style="width:auto; height:300px; margin-top:40px;">
      </div>
    </div>
</div>

  <?php include 'includes/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>
</html>
