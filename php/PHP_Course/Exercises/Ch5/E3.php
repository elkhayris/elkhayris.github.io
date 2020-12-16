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
    // Leap Year
    
    $num1 = 25;
    $num2 = 5;

    function addNumbers($n1,$n2) {
        return $n1 + $n2;
    }
    
    function subtractNumbers($n1,$n2) {
        return $n1 - $n2;
    }

    function multiplyNumbers($n1,$n2) {
        return $n1 * $n2;
    }

    function divideNumbers($n1,$n2) {
        return $n1 / $n2;
    }

    echo "(Addition of {$num1} and {$num2} is ".addNumbers($num1,$num2).")<br/>";
    echo "(Subtraction of {$num2} from {$num1} is ".subtractNumbers($num1,$num2).")<br/>";
    echo "(Multiplication of {$num1} and {$num2} is ".multiplyNumbers($num1,$num2).")<br/>";
    echo "(Division of {$num1} by {$num2} is ".divideNumbers($num1,$num2).")";
        
    ?>
        <script src="" async defer></script>
    </body>
</html>