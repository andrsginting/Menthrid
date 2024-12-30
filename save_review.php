<?php
include 'config.php';
include 'admin/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $domisili = $_POST['domisili'];
    $kesan = $_POST['kesan'];
    $pesan = $_POST['pesan'];
    $penilaian = $_POST['penilaian'];

    $stmt = $pdo->prepare("INSERT INTO reviews (nama, domisili, kesan, pesan, penilaian) VALUES (:nama, :domisili, :kesan, :pesan, :penilaian)");
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':domisili', $domisili);
    $stmt->bindParam(':kesan', $kesan);
    $stmt->bindParam(':pesan', $pesan);
    $stmt->bindParam(':penilaian', $penilaian);
    
    if ($stmt->execute()) {
        show_alert_and_redirect('Review submitted successfully', 'home.php');
    } else {
        show_alert_and_redirect('Failed to submit review', 'contact-us.php');
    }
    exit();
}
?>
