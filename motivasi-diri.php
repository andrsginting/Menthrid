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
  <title>Motivasi-Diri</title>
</head>
<body>
  <?php include 'includes/header.php'; ?>
<!-- Content section -->
<div class="container mt-4">
    <div class="row">
      <!-- Bagian Kiri -->
      <div class="col-lg-6">
      <h1>Motivasi Diri</h1>
            <p>Membangun motivasi diri terhadap kesehatan mental melibatkan pemahaman mendalam akan pentingnya menjaga keseimbangan emosional dan psikologis. Pertama-tama, kita dapat merenung pada kutipan inspiratif oleh Ralph Waldo Emerson yang mengatakan, "The first wealth is health." Kutipan ini memberikan pengingat bahwa kesehatan mental adalah kekayaan pertama yang perlu dijaga dan diperjuangkan. Memahami bahwa kesehatan mental adalah dasar dari kehidupan yang bermakna dan produktif dapat menjadi pendorong utama untuk fokus pada perawatan diri.</p>
            <p>Selanjutnya, kita dapat menciptakan motivasi dengan merancang tujuan kesehatan mental yang konkret dan bermakna. Sebagaimana kata Zig Ziglar, "What you get by achieving your goals is not as important as what you become by achieving your goals." Tujuan yang spesifik dan dapat diukur memberikan arah yang jelas, dan mencapainya tidak hanya menghasilkan perubahan positif dalam hidup, tetapi juga membangun karakter dan ketangguhan dalam menghadapi tantangan. Kutipan ini mengilustrasikan bahwa perjalanan mencapai tujuan kesehatan mental bukan hanya tentang hasil akhir, melainkan juga proses transformasi diri yang berharga.</p>
            <p>Terakhir, mendukung motivasi diri dapat melibatkan penciptaan lingkungan yang mendukung. Seperti yang dikatakan oleh Jim Rohn, "You are the average of the five people you spend the most time with." Menyelaraskan diri dengan individu yang mendukung pertumbuhan dan perawatan diri dapat memberikan energi positif. Keterlibatan dalam komunitas atau memiliki teman-teman yang memahami pentingnya kesehatan mental dapat menjadi pendorong tambahan untuk menjaga keseimbangan emosional. Dengan menyelaraskan diri dengan nilai-nilai positif, kita dapat membangun motivasi yang tahan lama untuk mengutamakan kesehatan mental sebagai investasi dalam kualitas hidup yang berkelanjutan.</p>
            <a href="credits.php" class="btn btn-primary" style="background-color: #EC744A; color: white;">Credits</a>
      </div>

      <!-- Bagian Kanan -->
      <div class="col-md-6">
        <img src="assets/motivasi-diri.png" alt="Deskripsi Gambar" class="img-fluid" style="width:auto; height:300px; margin-top:40px;">
      </div>
    </div>
</div>

  <?php include 'includes/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>