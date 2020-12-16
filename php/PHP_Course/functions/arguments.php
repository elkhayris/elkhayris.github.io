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

    $num1 = 4;
    $num2 = 6;

    function calculator($num1, $num2 = 35){
        echo $num1 * $num2."<br/>";
    }

    calculator($num1, $num2);
    calculator($num2);
    
    ?>

        <script src="" async defer></script>
    </body>
</html>