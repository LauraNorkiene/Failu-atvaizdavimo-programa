<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include_once('kintamieji.php');

    $dir = '';
    if (isset($_GET['dir'])) {
        $dir = $_GET['dir'];
    }

    echo "dir= $dir";
    ?>

    <nav class="navbar navbar-expand-lg bg-light mb-5 ps-5 pe-5 fs-4">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="antras.php">Home</a>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="nav-link active" href="login.php?logout=1">Atsijungti</a>
                    </li>
                </ul>

                <form class="d-flex" role="search" method="POST" action="new.php">
                    <input type="hidden" name="path" value="<?= $dir ?>">
                    <input type="text" name="pavadinimas" placeholder="Iveskite failo pavadinima">
                    <select name="files" id="files">
                        <option value="failas">Pasirinkite Failo tipą:</option>
                        <option value="txt">Text</option>
                        <option value="php">PHP</option>
                        <option value="html">HTML</option>
                        <option value="css">CSS</option>
                        <option value="folder">Folder</option>
                    </select>
                    <br><br>
                    <input type="submit" value="Sukurti">
                </form>

                <form class="d-flex" role="search" method="POST" action="paieska.php">
                    <input type="hidden" name="path" value="<?= $dir ?>">
                    <input class="form-control me-2" type="search" name="file" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary" value="Search" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    </div>
</body>

</html>