<?php

include_once('kintamieji.php');
if (isset($_GET['file'])) {
  $file = $_GET['file'];
  if (isset($_POST['content'])) {
    $content = $_POST['content'];
    file_put_contents(ROOT_PATH . '/' . $file, $content);
  }

  $content = file_get_contents(ROOT_PATH . '/' . $file);

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redagavimas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php
    include("nav.php");

    $sprogo = explode("/", $file);
    unset($sprogo[sizeof($sprogo) - 1]);
    $naujaslinkas = implode('/', $sprogo);

    ?>

    <h1 class="text-center">Failas: <?= $file ?></h1>

    <div class="container mt-5">

      <form method="POST" action="">
        <textarea name="content" style="width:100%; height: 300px;"><?= $content ?></textarea>
        <div class="mt-3 mygtukai">
          <button class="me-2">Išsaugoti</button>

          <a href="antras.php?dir=<?= $naujaslinkas ?>" class="button ps-3 pe-3 pb-1">Atgal</a>
        </div>
      </form>
    </div>

  <?php

} ?>

  </body>

  </html>