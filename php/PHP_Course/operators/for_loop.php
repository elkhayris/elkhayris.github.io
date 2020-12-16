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
    // for loop

    for($x = 1; $x <= 10; $x++) {
        echo "The number is " . $x . "<br/>";
    }

    $deposit = 1000;
    $interest = 0.05;

    for ($years = 1 ; $years <= 5; $years++ ){
        $deposit += ( $deposit * $interest);
        echo "The total after ". $years . " year" . ($years > 1 ? "s":"")
        . " is: " . $deposit . "<br/>";
    }

    ?>
        
        <script src="" async defer></script>
    </body>
</html>