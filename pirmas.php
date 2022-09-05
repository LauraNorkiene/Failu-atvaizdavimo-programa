<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pima uzduotis</title>
</head>

<body>

    <?php
    function dbd($a, $b)
    {
        if ($a == $b) {
            return $a;
        } else if ($a < $b) {
            return  dbd($a, ($b - $a));
        } else if ($a > $b) {
            return dbd($a - $b, $b);
        }
    }

    echo dbd(16, 2);

    ?>




</body>

</html>