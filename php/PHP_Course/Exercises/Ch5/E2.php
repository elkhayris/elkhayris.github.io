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
    // Leap Year
    
    $year = 1988;

    function isLeapYear($y) {
        return ($y % 400 == 0 || (  $y % 4 == 0 && $y % 100 != 0));
    }

    echo "{$year} is ".(isLeapYear($year) ? "":"not")." a leap year<br/>";
    
    ?>
        <script src="" async defer></script>
    </body>
</html>