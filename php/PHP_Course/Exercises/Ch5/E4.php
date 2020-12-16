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
    $num2 = 8;

    function swap(&$n1, &$n2) {
        $temp = $n1;
        $n1 = $n2;
        $n2 = $temp;
    }
        
    echo "Before swapping num1 = {$num1}, num2 = {$num2} <br/>";
    swap($num1,$num2);
    echo "After swapping num1 = {$num1}, num2 = {$num2} <br/>";
    

    ?>
        <script src="" async defer></script>
    </body>
</html>