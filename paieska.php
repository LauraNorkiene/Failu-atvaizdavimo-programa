<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paieska</title>
</head>

<body>
    <?php
    include("nav.php");


    function printDir($dir, $name)
    {
        $d = opendir($dir);
        $result = 0;
        while ($item = readdir($d)) {
            if ($item == '.' || $item == '..') {
                continue;
            }

            if ($item == $name) {
                echo "$dir/$item <br>";
                $result++;
            }

            if (is_dir($dir . '/' . $item)) {
                $result = printDir($dir . "/" . $item, $name);
            } else {
            }
        }
        closedir($d);
        return $result;
    }


    if (isset($_POST['file'])) {
        $file = $_POST['file'];

        $files = printDir(ROOT_PATH . '/' . $_POST['path'], $file);

        if ($files == 0) {
            echo "Failas nerastas";
        }
    }
    ?>

</body>

</html>