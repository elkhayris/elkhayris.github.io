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
    
    // Cookie
    // Arguments:
    // Name
    // Value
    // Expire
    // Path
    // Domain
    // Security

    // If you do not include an expiration date, the cookie will be stored for the current session
    $time = time() + 86400 * 30;

    setcookie("name","Sami",$time);
    
    print_r($_COOKIE);



    ?>

 

        <script src="" async defer></script>
    </body>
</html>