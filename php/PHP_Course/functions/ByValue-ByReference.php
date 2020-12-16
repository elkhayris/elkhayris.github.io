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

    $x = 10;
    
    function addByValue($x){
        $x += 10;
    }

    addByValue($x);

    echo "addByValue: {$x}<br/>"; 

    function addByReference(&$x) {
        $x += 10;
    }

    addByReference($x);

    echo "addByReference: {$x}<br/>";


    ?>

        <script src="" async defer></script>
    </body>
</html>