<?php
setcookie("labas", "gediminas", time() + 60);
session_start();
if (isset($_POST['user']) && isset($_POST['password'])) {
  if ($_POST['user'] == 'admin' && $_POST['password'] == 'admin') {
    $_SESSION['login'] = 1;
    $_SESSION['user'] = $_POST['user'];
    header("location:antras.php");
    die();
  }
}

if (isset($_GET['logout'])) {
  session_destroy();
  // unset($_SESSION);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container mt-5 ">
    <form action="" method="post">
      <div class="mb-3 col-4 mx-auto">
        <label for="user" class="form-label fs-2">User</label>
        <input type="user" class="form-control" name="user" aria-describedby="emailHelp">

      </div>
      <div class="mb-3 col-4 mx-auto">
        <label for="exampleInputPassword1" class="form-label fs-2">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-secondary fs-5">Prisijungti</button>
      </div>
    </form>
  </div>
</body>

</html>