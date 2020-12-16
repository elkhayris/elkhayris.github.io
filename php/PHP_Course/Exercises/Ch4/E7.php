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
    // Fibonacci series
    
    $fib1 = 0;
    $fib2 = 1;

    echo $fib1."<br/>";
    while( $fib1 <= 50 ) {
        echo $fib2."<br/>";
        $temp = $fib2;
        $fib2 += $fib1;
        $fib1 = $temp;
    }
    

      
    ?>    
        <script src="" async defer></script>
    </body>
</html>