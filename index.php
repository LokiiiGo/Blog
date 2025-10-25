<?php
include_once ("helpers/url.php");
include_once ("templates/header.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Estilos do projetos!-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=$BASE_URL?>./stylesheets/stylesheets.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
<main>
    <div id="title-container">
      <h1>Blog de Programação</h1>
      <p>Autor: Lucas Bruno Calle Chambi</p>
    </div>
    <div id="posts-container">
      <?php foreach($posts as $post): ?>
        <div class="post-box" class="post">
          <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
          <h2 class="post-title"><a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h2>
          <p class="post-description"><?= $post['description'] ?></p>
          
          <div class="tags-container">
            <?php foreach($post['tags'] as $tag): ?>
            <a href="#"><?= $tag ?></a>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </main>
<!-- Inclusão do rodapé -->
<?php
  include_once("templates/footer.php");
?>
</body>
</html>