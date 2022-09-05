<?php
include("nav.php");
include_once('kintamieji.php');
if (isset($_GET['file'])) {
  $file = $_GET['file'];
  //unlink(ROOT_PATH . '/' . $file);

  $sprogo = explode("/", $file);
  unset($sprogo[sizeof($sprogo) - 1]);
  $naujaslinkas = implode('/', $sprogo);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ištrintas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <h3 class="mb-3">Failas ištrintas</h3>
    <a href="antras.php?dir=<?= $naujaslinkas ?>" class="button ps-3 pe-3 pb-1">Atgal</a>
  </div>
</body>

</html>