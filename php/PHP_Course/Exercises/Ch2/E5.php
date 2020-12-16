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
            $cmToInch = 2.54;
            $cm = 3;

            $inch = number_format($cm / $cmToInch,2,"."," ");

            echo $cm." centimeters is ".$inch." inches.";
            
        ?> 
        <script src="" async defer></script>
    </body>
</html>