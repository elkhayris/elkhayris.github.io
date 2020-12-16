<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
            $x = 17;
            $y = 23;
            $z = 13;

            $average = ($x + $y + $z) / 3;

            $average = number_format($average, 2, '.', ' ');
            echo "The average is {$average}";
        ?>
        <script src="" async defer></script>
    </body>
</html>