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
            $price = 215.00;
            $vat = 0.15;

            $total_price = $price * ( 1 + $vat);
            echo "Price: {$price}<br/>Vat: {$vat}<br/>Total Price: {$total_price}";
        ?>
        <script src="" async defer></script>
    </body>
</html>