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
    $year = 1900;

    if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 <> 0)) {
        echo "Year: {$year}. Leap.";
    }
    else {
        echo "Year: {$year}. Not leap.";
    }
    ?>    
        <script src="" async defer></script>
    </body>
</html>