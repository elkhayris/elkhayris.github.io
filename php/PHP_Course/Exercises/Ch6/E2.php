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
    // Birthday Countdown

    $today = strtotime(date("Y-m-d"));
    $mybirthday = strtotime("April 6, 2021");
    
    echo ($mybirthday - $today) / 86400;

    ?>
        
        <script src="" async defer></script>
    </body>
</html>