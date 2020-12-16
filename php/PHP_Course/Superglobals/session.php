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
    // SESSION
    // Collect data from session

    session_start();

    $_SESSION["name"] = "Sami";
    $_SESSION["age"] = 35;

    echo "Hello ".$_SESSION["name"];



    ?>

 

        <script src="" async defer></script>
    </body>
</html>