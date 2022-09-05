<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naujas failas</title>
</head>

<body>
    <?php
    include_once("kintamieji.php");


    if (isset($_POST['files'])) {
        $kelias = ROOT_PATH . '/' . $_POST['path'] . '/' . $_POST['pavadinimas'] . '/' . $_POST['files'];

        $current = '';
        $file = $_POST['files'];
        $pavadinimas = $_POST['pavadinimas'];
        if (isset($_POST['files'])) {
            $file11 = $_POST['files'];
            if ($file11 == 'php') {
                $file = $pavadinimas . '.php';
                file_put_contents(ROOT_PATH . '/' . $file, $current);
            } else if ($file11 == 'text') {
                $file = $pavadinimas . '.txt';
                file_put_contents(ROOT_PATH  . '/' . $file, $current);
            } else if ($file11 == 'html') {
                $file = $pavadinimas . '.html';
                file_put_contents(ROOT_PATH  . '/' . $file, $current);
            } else if ($file11 == 'css') {
                $file = $pavadinimas . '.css';
                file_put_contents(ROOT_PATH . '/' . $file, $current);
            } else if ($file11 == 'folder') {
                mkdir(ROOT_PATH  . '/' . $pavadinimas, 0777, true);
            }
            $current .= 'Naujas Failas';

            echo "Kuriu faila: " . $kelias;
            echo '<p>Failas <b>' . $file . '</b> pridėtas</p>';

            echo "Dir = $_POST[path] <br>";
            echo "Failo tipas = $_POST[files] <br>";
            echo "Pavadinimas = $_POST[pavadinimas] <br>";
        }
    }


    ?>



</body>

</html>