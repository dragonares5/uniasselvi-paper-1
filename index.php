<?php
include_once('config.php');

$posts = $conn->query('SELECT * FROM posts ORDER BY created_at DESC')->fetch_all(MYSQLI_ASSOC);
?>
<?php include('inc/_header.php') ?>

<div class="mt-3">
  <?php
  if (count($posts) === 0) {
    echo '<div class="alert alert-warning" role="alert">Nenhum post encontrado</div>';
  } else {
    foreach ($posts as $post) {
  ?>
      <div class="card mb-3">

        <div class="card-body">
          <h5 class="card-title"><a href="pages/show.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h5>
          <span class="text-muted">Postado em <?= date('d/m/Y H:i', strtotime($post['created_at'])) ?></span>
          <br><br>
          <p class="card-text"><?= $post['description'] ?></p>
        </div>
      </div>
  <?php
    }
  }
  ?>

</div>
<?php include('inc/_footer.php') ?>
