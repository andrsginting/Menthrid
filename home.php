<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/home2.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <title>Menthrid</title>
</head>
<body>
<?php
session_start();
include 'config.php';

// Redirect to index.php if not logged in as member
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'member') {
    header('Location: index.php');
    exit();
}

include 'includes/header.php';
?>

<!-- Content section -->
<div class="container mt-4">
    <div class="row content-home">
        <!-- Left Section -->
        <div class="col-md-6 container-kiri">
            <h1>Menjadi Solusi Masalah Mental Health Kamu!</h1>
            <p class="paragraf"><span class="highlight">Kami hadir</span> sebagai sahabat, keluarga, dan teman untuk mendengarkan dan memberi solusi atas keluhanmu.</p>
            <a href="what-is-menthrid.php" class="btn btn-primary">What is Menthrid?</a>
        </div>
        <!-- Right Section -->
        <div class="col-md-6 container-kanan">
            <div id="homeCarousel" class="carousel slide carousel-kanan" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="show_articles.php">
                            <img src="assets/articles_banner.png" class="d-block w-100 img-fluid" alt="Articles">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="show_images.php">
                            <img src="assets/images_banner.png" class="d-block w-100 img-fluid" alt="Images">
                        </a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Slider Section -->
    <div class="container mt-4">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner carousel-bawah">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <a href="apa-itu-mental-health.php">
                        <img src="assets/banner1.png" class="d-block w-100 img-fluid" alt="Slide 1">
                    </a>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <a href="mental-health-penting.php">
                        <img src="assets/banner2.png" class="d-block w-100 img-fluid" alt="Slide 2">
                    </a>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <a href="kenali-diri-anda.php">
                        <img src="assets/banner3.png" class="d-block w-100 img-fluid" alt="Slide 3">
                    </a>
                </div>
                <!-- Slide 4 -->
                <div class="carousel-item">
                    <a href="motivasi-diri.php">
                        <img src="assets/banner4.png" class="d-block w-100 img-fluid" alt="Slide 4">
                    </a>
                </div>
            </div>
            <!-- Navigation Buttons -->
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
