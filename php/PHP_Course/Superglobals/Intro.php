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
    // Superglobals
    // GLOBAL
    // $_POST
    // $_GET
    // $_SERVER
    // $_COOKIE
    // $_SESSION
    // $_FILES

    $x = 100;
    $y = 200;

    function add() {
        $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"]; 
    }

    add();
    echo $z;

    ?>
        
        <script src="" async defer></script>
    </body>
</html>