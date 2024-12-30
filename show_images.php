<?php
session_start();
include 'config.php';
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'member') {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_image'])) {
    $description = $_POST['description'];
    $image_path = $_FILES['image']['name'];
    $target = 'uploads/' . basename($image_path);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $stmt = $pdo->prepare("INSERT INTO gallery (image_path, description, created_at) VALUES (?, ?, NOW())");
        $stmt->execute([$image_path, $description]);

        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
            echo json_encode(['status' => 'success', 'image_path' => $image_path, 'description' => $description]);
            exit();
        } else {
            header('Location: show_images.php');
            exit();
        }
    } else {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
            echo json_encode(['status' => 'error', 'message' => 'Failed to upload image.']);
            exit();
        } else {
            echo "Failed to upload image.";
        }
    }
}

$stmt = $pdo->prepare("SELECT * FROM gallery");
$stmt->execute();
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/home2.css">
  <title>Images</title>
</head>
<body>
  <?php include 'includes/header.php'; ?>
  <div class="container mt-4 show-list">
      <h2>Images</h2>
      <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addImageModal">Add your images</button>
      <div class="list-group">
          <?php foreach ($images as $image): ?>
              <?php $image_path = 'uploads/' . $image['image_path']; ?>
              <a href="#" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#imageModal<?= $image['id'] ?>">
                  <h5 class="mb-1"><?= htmlspecialchars($image['description']) ?></h5>
                  <p class="mb-1">
                      <img src="<?= htmlspecialchars($image_path) ?>" alt="<?= htmlspecialchars($image['description']) ?>" style="max-width: 100px;">
                  </p>
              </a>

              <!-- Modal -->
              <div class="modal fade" id="imageModal<?= $image['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"><?= htmlspecialchars($image['description']) ?></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <img src="<?= htmlspecialchars($image_path) ?>" alt="<?= htmlspecialchars($image['description']) ?>" class="img-fluid">
                              <p><?= nl2br(htmlspecialchars($image['description'])) ?></p>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </div>
              </div>
          <?php endforeach; ?>
      </div>
  </div>
  
  <!-- Add Image Modal -->
  <div class="modal fade" id="addImageModal" tabindex="-1" role="dialog" aria-labelledby="addImageModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="addImageModalLabel">Add Image</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="description">Description</label>
                          <input type="text" class="form-control" id="description" name="description" required>
                      </div>
                      <div class="form-group">
                          <label for="image">Image</label>
                          <input type="file" class="form-control" id="image" name="image" required>
                      </div>
                      <button type="submit" class="btn btn-primary" name="add_image">Submit</button>
                  </form>
              </div>
          </div>
      </div>
  </div>

  <?php include 'includes/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js
