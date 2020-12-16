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
    
    for($x=0; $x<=5; $x++){
        switch ($x){
            case 1: echo "Spades"; break;
            case 2: echo "Hearts"; break;
            case 3: echo "Diamonds"; break;
            case 4: echo "Clubs"; break;
            default: echo "Invalid suit";
        }
        echo "<br/>";
    }

    ?>    
        <script src="" async defer></script>
    </body>
</html>