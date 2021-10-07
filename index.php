<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Baju</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $helai = 0;
    $baju = 70;
    for ($duit = 250; $duit > $baju; $duit -= $baju) {
        $helai++;
    }
    echo "$helai helai baju. Baki duit = $duit";
    ?>
</body>

</html>