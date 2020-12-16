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
    // Sorting array

    $numbers = [4,3,2,6,5,9,8,2,1,0];
    arsort($numbers);
    
    $sorted = [];
    foreach($numbers as $number) {
        array_push($sorted,$number);
        // echo $number.' ';
    }
    
    print_r($numbers);
    print "<br/>";
    print_r($sorted);
    ?>
        
        <script src="" async defer></script>
    </body>
</html>