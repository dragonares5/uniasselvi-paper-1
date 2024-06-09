<?php 
include('../config.php');
include('../inc/_header.php') 
?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $created_at = date('Y-m-d H:i:s');
  $sql = "INSERT INTO posts (title, description, created_at) VALUES ('$title', '$description', '$created_at')";
  $conn->query($sql);
  header('Location: /');
}
?>
<div class="container my-5">
  <h2>Criar um post</h2>
  <form method="POST">
    <div class="mb-3">
      <label for="title" class="form-label">Título</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Conteúdo</label>
      <textarea type="text" class="form-control" id="description" name="description" style="height: 300px;"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <br>
  <?php include('../inc/_footer.php') ?>
