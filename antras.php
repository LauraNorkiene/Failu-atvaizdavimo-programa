<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Failu atvaizdavimo programa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php
    include("nav.php");
    include_once('kintamieji.php');

    function printDir($dir)
    {
        $d = opendir(ROOT_PATH . '/' . $dir);
        echo "<ul>";

        while ($item = readdir($d)) {
            if ($item == '.' || $item == '..') {
                continue;
            }

            if (is_dir(ROOT_PATH . '/' . $dir . '/' . $item)) {
                echo "<li><img src='folder.png' style='width:24px'> <a href='?dir=" . $dir . '/' . $item . "'> <b>$item</b> </a>";
                echo "</li>";
            } else {
                echo "<li>";
                $ext = pathinfo(ROOT_PATH . '/' . $dir . "/" . $item, PATHINFO_EXTENSION);
                if ($ext == 'php') {
                    echo "<img src='php.png' style='width:24px'>";
                }
                echo $item;
                if ($ext == 'php' || $ext == 'txt') {

                    echo "<a href='edit.php?file=$dir/$item'class='button ms-3 pt-1 pb-1 ps-2 pe-2'>Redaguoti</a>";
                    echo "<a href='delete.php?file=$dir/$item' class='button ms-3 pt-1 pb-1 ps-2 pe-2'>Ištrinti</a>";
                }
                echo "</li>";
            }
        }
        closedir($d);
        echo "</ul>";
    }

    $dir = '';
    if (isset($_GET['dir'])) {
        $dir = $_GET['dir'];
    }

    printDir($dir);


    ?>


</body>

</html>