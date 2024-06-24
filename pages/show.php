<?php
include_once('../config.php');

$posts = $conn->query('SELECT * FROM posts WHERE id = ' . $_GET['id'])->fetch_all(MYSQLI_ASSOC);
$post = $posts[0] ?? [];
?>
<?php include('../inc/_header.php') ?>

<div class="mt-3">
  <?php
  if (count($post) === 0) {
    echo '<div class="alert alert-warning" role="alert">Nenhum post encontrado</div>';
  } else {
  ?>
    <div class="card mb-3">

      <div class="card-body">
        <h5 class="card-title"><?= $post['title'] ?></h5>
        <span class="text-muted">Postado em <?= date('d/m/Y H:i', strtotime($post['created_at'])) ?></span>
        <br><br>
        <p class="card-text"><?= $post['description'] ?></p>
      </div>
    </div>
  <?php
  }
  ?>

</div>
<?php include('../inc/_footer.php') ?>
