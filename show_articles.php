<?php
session_start();
include 'config.php';
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'member') {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_article'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $stmt = $pdo->prepare("INSERT INTO articles (title, content, created_at, updated_at) VALUES (?, ?, NOW(), NOW())");
    $stmt->execute([$title, $content]);

    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        echo json_encode(['status' => 'success', 'title' => $title, 'content' => $content]);
        exit();
    } else {
        header('Location: show_articles.php');
        exit();
    }
}

$stmt = $pdo->prepare("SELECT * FROM articles");
$stmt->execute();
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/home2.css">
  <title>Articles</title>
</head>
<body>
  <?php include 'includes/header.php'; ?>
  <div class="container mt-4 show-list">
      <h2>Articles</h2>
      <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addArticleModal">Add your articles</button>
      <div class="list-group">
          <?php foreach ($articles as $article): ?>
              <a href="#" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#articleModal<?= $article['id'] ?>">
                  <h5 class="mb-1"><?= htmlspecialchars($article['title']) ?></h5>
                  <p class="mb-1"><?= htmlspecialchars(substr($article['content'], 0, 100)) ?>...</p>
              </a>

              <!-- Modal -->
              <div class="modal fade" id="articleModal<?= $article['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"><?= htmlspecialchars($article['title']) ?></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <?= nl2br(htmlspecialchars($article['content'])) ?>
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
  
  <!-- Add Article Modal -->
  <div class="modal fade" id="addArticleModal" tabindex="-1" role="dialog" aria-labelledby="addArticleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="addArticleModalLabel">Add Article</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form method="post">
                      <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" id="title" name="title" required>
                      </div>
                      <div class="form-group">
                          <label for="content">Content</label>
                          <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary" name="add_article">Submit</button>
                  </form>
              </div>
          </div>
      </div>
  </div>

  <?php include 'includes/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
